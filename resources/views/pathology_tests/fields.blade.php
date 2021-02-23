<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('test_name', __('messages.pathology_test.test_name').':') }}<span class="required">*</span>
            {{ Form::text('test_name', null, ['class' => 'form-control','required']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('short_name', __('messages.pathology_test.short_name').':') }}<span
                    class="required">*</span>
            {{ Form::text('short_name', null, ['class' => 'form-control','required']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('test_type', __('messages.pathology_test.test_type').':') }}<span class="required">*</span>
            {{ Form::text('test_type', null, ['class' => 'form-control','required']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('category_id', __('messages.pathology_test.category_name').':') }}<span
                    class="required">*</span>
            {{ Form::select('category_id',$data['pathologyCategories'], null, ['class' => 'form-control','required','id' => 'categoryName','placeholder'=>'Select Category','required']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('unit', __('messages.pathology_test.unit').':') }}
            {{ Form::number('unit', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('subcategory', __('messages.pathology_test.subcategory').':') }}
            {{ Form::text('subcategory', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('method', __('messages.pathology_test.method').':') }}
            {{ Form::text('method', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('report_days', __('messages.pathology_test.report_days').':') }}
            {{ Form::number('report_days', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('charge_category_id', __('messages.pathology_test.charge_category').':') }}<span
                    class="required">*</span>
            {{ Form::select('charge_category_id',$data['chargeCategories'], null, ['class' => 'form-control','required','id' => 'chargeCategory','placeholder'=>'Select Charge Category','required']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('standard_charge', __('messages.pathology_test.standard_charge').':') }}<span
                    class="required">*</span> (<b>{{ getCurrencySymbol() }}</b>)
            {{ Form::text('standard_charge', null, ['class' => 'form-control price-input', 'id' => 'standardCharge', 'readonly', 'required']) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            <a href="{{ route('pathology.test.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</div>
