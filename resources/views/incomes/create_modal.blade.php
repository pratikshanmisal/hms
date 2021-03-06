<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('messages.incomes.new_income')}}</h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'addNewForm','files' => true]) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('income_head', __('messages.incomes.income_head').':') }}<label
                                class="required">*</label>
                        {{ Form::select('income_head', $incomeHeads, null, ['class' => 'form-control', 'required', 'id' => 'incomeId','placeholder' => __('messages.incomes.select_income_head')]) }}
                    </div>

                    <div class="form-group col-sm-12">
                        {{ Form::label('name',__('messages.incomes.name').':') }}<span
                                class="required">*</span>
                        {{ Form::text('name', null, ['class' => 'form-control','required']) }}
                    </div>

                    <div class="form-group col-sm-6">
                        {{ Form::label('date', __('messages.incomes.date').':') }}<label
                                class="required">*</label>
                        {{ Form::text('date', null, ['class' => 'form-control','required', 'id' => 'date',  'autocomplete' => 'off']) }}
                    </div>

                    <div class="form-group col-sm-6">
                        {{ Form::label('invoice_number',__('messages.incomes.invoice_number').':') }}
                        {{ Form::text('invoice_number', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group col-sm-6">
                        {{ Form::label('amount', __('messages.incomes.amount').':') }}<span
                                class="required">*</span>
                        {{ Form::text('amount', null, ['class' => 'form-control price-input', 'autocomplete' => 'off', 'required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")']) }}
                    </div>

                    <div class="form-group col-sm-6">
                        <div class="row">
                            <div class="col-5">
                                {{ Form::label('attachment', __('messages.incomes.attachment').':') }}
                                <label class="image__file-upload"> {{__('messages.incomes.choose')}}
                                    {{ Form::file('attachment',['id'=>'attachment','class' => 'd-none document-file']) }}
                                </label>
                            </div>
                            <div class="col-5 preview-image-video-container pl-0 mt-1">
                                <img id='previewImage' class="img-thumbnail thumbnail-preview image-stretching"
                                     src="{{ asset('assets/img/default_image.jpg') }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        {{ Form::label('description', __('messages.incomes.description').':') }}
                        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) }}
                    </div>

                    <div class="text-right col-sm-12 mt-4">
                        {{ Form::button( __('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary','id'=>'btnSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                        <button type="button" class="btn btn-light ml-1"
                                data-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
