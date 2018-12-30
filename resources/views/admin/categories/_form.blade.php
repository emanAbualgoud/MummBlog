
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label for="name" class="col-form-label col-lg-3 col-sm-12"> Name
                <span class="required"> * </span>
            </label>
            <div class="col-lg-9 col-md-9 col-sm-12">
                {!! Form::text('name', isset($category) ? $category->name : null, ['class'=> 'form-control m-input ', 'id'=> 'name']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="description" class="col-form-label col-lg-3 col-sm-12"> Description
                <span class="required"> * </span>
            </label>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <textarea class="form-control m-input  m_autosize_1" id="description" name="description" rows="7"> {{ isset($category) ? $category->description : null }} </textarea>
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-success"> Submit </button>
            @if (!isset($category))
            <button type="reset" class="btn btn-secondary"> Reset </button>
            @endif
        </div>
    </div>