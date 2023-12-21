<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ParentCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ParentCategory\StoreCategory;
use App\Http\Requests\ParentCategory\UpdateCategory;
use App\Models\ParentCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ParentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ParentCategoryDataTable $parentCategoryDataTable)
    {
            return $parentCategoryDataTable->render('admin.parent-category.index',[$parentCategoryDataTable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view("admin.parent-category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request):RedirectResponse
    {
        try{
            ParentCategory::create($request->validated());

            return redirect()->route("parent.category.index")->withSuccess("category Created Successfully");
        } catch (Exception $ex) {

            return back()->withErrors("Something went wrong");
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
    public function edit(ParentCategory $parentCategory):View
    {
            return view("admin.parent-category.edit")->with(['parentCategory'=>$parentCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update
    (UpdateCategory  $request, ParentCategory $parentCategory): RedirectResponse
    {
        try{
            $parentCategory->update
            ($request->validated());
            return redirect()->route('parent.category.index')->withSuccess('Category Updated Successfully');
        } catch (Exception $ex){
            return back()->withErrors("Something went wrong!");

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentCategory $parentCategory):RedirectResponse
    {
        try {
            $parentCategory->delete();

            return back()->withSuccess("Category Deleted Successfully");
        } catch (Exception $ex) {
            return back()->withErrors("Something went wrong");
        }
    }
}
