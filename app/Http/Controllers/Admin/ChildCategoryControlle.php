<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ChildCategoryDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChildCategory\StoreCategory;
use App\Http\Requests\ChildCategory\UpdateCategory;
use App\Models\ChildCategory;
use App\Models\ParentCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChildCategoryControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChildCategoryDatatable $childCategoryDatatable)
    {
        return $childCategoryDatatable->render('admin.child-category.index', [$childCategoryDatatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        $parentCategories = ChildCategory::all();

        return view('admin.child-category.create')->with(['parentCategories' =>$parentCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request):RedirectResponse
    {
        try {
            $childCategory = ChildCategory::create($request->validated());
            if(isset($request->image)){
                $childCategory->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('childCategory.image');
            }
            if ($childCategory) {
                return redirect()->route('child.category.index')->withSuccess('Child Category Created Successfully');
            } else {
                return back()->withErrors('Something went wrong ! ');
            }
        } catch (Exception $ex) {
            return back()->withErrors('Something went erong !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildCategory $childCategory):View
    {
        $parentCategories = ParentCategory::all();
        return view('admin.child-category.edit')->with(['childCategory'=>$childCategory, 'parentCategories'=>$parentCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, ChildCategory $childCategory):RedirectResponse
    {
        try {
            $childCategory->update($request->validate());

            if(isset($request['image']) ==null) {
                $childCategory->clearMediaCollection('childCategory.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))){
                    return redirect()->route('child.category.index')->withSuccess('Child Category Updated successfully');
                }
                $childCategory->media()->delete();
                $childCategory->addMedia(storage_path('tmp/uploads' . $request['image']))->toMediaCollection('childCategory.image');
            }
            if($childCategory) {
                return redirect()->route('child.category.idex')->withSuccess('Child Category Updated Successfully');
            }
        } catch (Exception $ex) {
            return back()->withErrors($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildCategory $childCategory):RedirectResponse
    {
        try {
             $childCategory->media()->delete();
             $childCategory->delete();

             return redirect()->back()->withSuccess('Child Category Deleted Successfully');
        } catch (Exception $ex) {
            return back()->withErrors('Child Category Not Deleted');
        }
    }
}
