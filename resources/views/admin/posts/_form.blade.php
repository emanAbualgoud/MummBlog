
    <div class="m-portlet__body">
        @if( isset($post) )
            <div class="form-group m-form__group row">
                <div class="col-lg-5 col-sm-12">
                </div>
                <div class="col-lg-4 col-lg-offset-3 col-md-6 col-sm-12">
                    <div class="media">
                        <img class="m--margin-right-20" style="width: 100px;" src="{{ URL::asset('public/uploads/posts/'.$post->image) }}" title="">
                    </div>
                </div>
            </div>
        @endif

        <div class="form-group m-form__group row">
            <label for="photo" class="col-form-label col-lg-3 col-sm-12"> Image
                @if( !isset($post) )
                <span class="required"> * </span>
                @endif
            </label>
            <div></div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="photo" name="photo">
                    <label class="custom-file-label" for="photo">
                        Choose image
                    </label>
                </div>
                @if ($errors->has('photo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="title" class="col-form-label col-lg-3 col-sm-12"> Title
                <span class="required"> * </span>
            </label>
            <div class="col-lg-9 col-md-9 col-sm-12">
                {!! Form::text('title', isset($post) ? $post->title : null, ['class'=> 'form-control m-input ', 'id'=> 'title']) !!}
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="category_id" class="col-form-label col-lg-3 col-sm-12"> Category
                <span class="required"> * </span>
            </label>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <select class="form-control m-select2 m_select2_1" id="category_id" name="category_id">
                    <option value ></option>
                    @foreach( $categories as $category)
                        <option value="{{ $category->id }}" {{ isset($post) ? $post->category_id == $category->id ? "selected" : '' : old("category_id") == $category->id ? "selected" : ""  }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            @if ($errors->has('category_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="description" class="col-form-label col-lg-3 col-sm-12"> Description
                <span class="required"> * </span>
            </label>
            <div class="col-lg-9 col-md-9 col-sm-12">
                {!! Form::textarea('description', isset($post) ? $post->description : null, ['class'=> 'form-control m-input  m_autosize_1', 'id'=> 'description', 'rows'=> "7"]) !!}
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="content" class="col-form-label col-lg-3 col-sm-12"> Content
                <span class="required"> * </span>
            </label>
            <div class="col-lg-9 col-md-9 col-sm-12">
                {!! Form::textarea('content', isset($post) ? $post->content : null, ['class'=> 'form-control m-input  editor', 'id'=> 'content', 'rows'=> "10", 'cols'=> '50']) !!}
                @if ($errors->has('content'))
                    <span class="help-block">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions">
            <button type="submit" class="btn btn-success"> Submit </button>
            @if (!isset($post))
            <button type="reset" class="btn btn-secondary"> Reset </button>
            @endif
        </div>
    </div>