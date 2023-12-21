@if (in_array($type,['text','email','password','number']))

    <!--begin::Col-->
    <div class="col-lg-12 fv-row fv-plugins-icon-container">
        <label class="col-lg-8 col-form-label required fw-bold fs-6">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>
    <div class="error text-danger">{{ $message }}</div>
    <!--end::Col-->

@elseif ($type === "checkbox")

    <div class="col-sm-3 my-4">
        <label class="form-check form-switch form-check-custom form-check-solid">
            <input class="form-check-input" type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"/>
            <span class="form-check-label fw-semibold text-muted">{{ $label }}</span>
        </label>
        <div class="error text-danger col-sm-3">{{ $message }}</div>
    </div>

@elseif ($type === "file")

    <!--begin::Col-->
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <!--begin::Image input-->
            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="avatar" />
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->
            <!--begin::Hint-->
            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
            <!--end::Hint-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
<!--end::Col-->
<div class="error text-danger">{{ $message }}</div>

@elseif ($type === 'submit')

    <button type="{{ $type }}" class="btn btn-success">
        {{ $label }}
    </button>

@elseif (in_array($type,['multi-select','select']))

    <!--begin::Col-->
    <div class="mb-10 my-4">
        <label for="" class="form-label">{{ $label }}</label>
        <select class="form-select form-select-solid is-valid" name="{{ $name }}" data-placeholder="Select an option" data-allow-clear="true" data-control="select2"
            @if ($type === 'multi-select')
                 multiple="multiple"
            @endif
        >
            @foreach ($options as $option)
                <option></option>
                <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="error text-danger">{{ $message }}</div>
    <!--end::Col-->

@endif
