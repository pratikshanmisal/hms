<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.charge.new_charge') }}</h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'addNewForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('charge_type', __('messages.charge_category.charge_type').(':')) }}<span
                                class="required">*</span>
                        {{ Form::select('charge_type', $chargeTypes, null, ['class' => 'form-control','required','id' => 'chargeTypeId','placeholder' => 'Select Charge Type']) }}
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('charge_category_id', __('messages.charge.charge_category').(':')) }}<span
                                class="required">*</span>
                        {{ Form::select('charge_category_id', (isset($chargeCategories) ? nl2br(e($chargeCategories)) : []), null, ['class' => 'form-control','required','id' => 'chargeCategoryId','placeholder' => 'Select Charge Category']) }}
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('code', __('messages.charge.code').(':')) }}<span class="required">*</span>
                        {{ Form::text('code', null, ['class' => 'form-control','required']) }}
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('standard_charge', __('messages.charge.standard_charge').(':')) }}<span
                                class="required">*</span>
                        {{ Form::text('standard_charge', null, ['class' => 'form-control price-input','required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")']) }}
                    </div>

                    <div class="form-group col-sm-12">
                        {{ Form::label('description', __('messages.birth_report.description').(':')) }}
                        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) }}
                    </div>
                    <div class="text-right col-sm-12">
                        {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                        <button type="button" class="btn btn-light ml-1"
                                data-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

