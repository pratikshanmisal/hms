<div id="editIpdTimelineModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.ipd_patient_timeline.edit_ipd_timeline') }}</h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'editIpdTimelineForm', 'files'=>true]) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="editValidationErrorsBox"></div>
                {{ Form::hidden('ipd_patient_department_id',$ipdPatientDepartment->id, ['id'=>'ipdPatientDepartmentId']) }}
                {{ Form::hidden('id',null,['id'=>'ipdTimelineId']) }}
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('title', __('messages.ipd_patient_timeline.title').':') }}<span class="required">*</span>
                        {{ Form::text('title', null, ['class' => 'form-control','required' , 'id' => 'editTimelineTitle']) }}
                    </div>
                    <div class="form-group col-md-12 mb-0">
                        <div class="form-group">
                            {{ Form::label('date', __('messages.ipd_patient_timeline.date').':') }}<label
                                    class="required">*</label>
                            {{ Form::text('date', null, ['class' => 'form-control','id' => 'editTimelineDate','autocomplete' => 'off', 'required', 'id' => 'editTimelineDate']) }}
                        </div>
                    </div>
                    <div class="form-group col-md-12 mb-0">
                        <div class="form-group">
                            {{ Form::label('description', __('messages.ipd_patient_timeline.description').':') }}
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4, 'id' => 'editTimelineDescription']) }}
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="row">
                            <div class="col">
                                {{ Form::label('document', __('messages.ipd_patient_timeline.document').':') }}
                                <label class="image__file-upload"> {{ __('messages.common.choose') }}
                                    {{ Form::file('attachment',['id'=>'editTimelineDocumentImage','class' => 'd-none document-file']) }}
                                </label>
                                <a href="#" id="timeDocumentUrl"
                                   target="_blank">{{ __('messages.common.view') }}</a>
                            </div>
                            <div class="col mt-2">
                                <img id='editPreviewTimelineImage'
                                     class="img-thumbnail thumbnail-preview image-stretching"
                                     src="{{ asset('assets/img/default_image.jpg') }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12 mb-0">
                        {{ Form::label('visible_to_person', __('messages.ipd_patient_timeline.visible_to_person').(':')) }}
                        <label class="switch switch-label switch-outline-primary-alt d-block">
                            <input name="visible_to_person" class="switch-input" type="checkbox" value="1"
                                   id="editTimelineVisibleToPerson">
                            <span class="switch-slider" data-checked="&#x2713;"
                                  data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>
                <div class="text-right mt-3">
                    {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnIpdTimelineEdit','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button type="button" id="btnIpdTimelineCancel" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
