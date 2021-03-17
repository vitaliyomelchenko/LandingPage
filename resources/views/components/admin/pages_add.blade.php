<x-admin.layout />
<x-admin.index :title="$title"/>
<div style="margin-top: 50px;" class="wrapper container-fluid">
    <form action="{{ route('pagesAdd') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                    <label for="name" class="col-xs-2 control-label"></label>
                    <div class="col-xs-8">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Page title...">
                    </div>
            </div>
            <div class="form-group">
                    <label for="alias" class="col-xs-2 control-label"></label>
                    <div class="col-xs-8">
                        <input type="text" name="alias" value="{{ old('alias') }}" class="form-control" placeholder="Alias name...">
                    </div>
            </div>
            <div class="form-group">
                    <label for="text" class="col-xs-2 control-label"></label>
                    <div class="col-xs-8">
                        <textarea name="text" class="form-control" id="editor">{{ old('text') }}</textarea>
                    </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <input type="file" name="img">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
    </form>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</div>
