@extends('admin/layouts.main')
@section('content')
<link rel="stylesheet" href="{{ asset('admin-assets/css/text-editor.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="my-2">Add Title</h5>
                                    <div class="input-group">
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title" id="title" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="my-2">Add Heading</h5>
                                    <div class="input-group">
                                        <input type="text" name="heading" class="form-control" placeholder="Enter heading" id="heading" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="my-2">Add Slug</h5>
                                    <div class="input-group">
                                        <input type="text" name="slug" class="form-control" placeholder="Enter Slug" id="slug">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="my-2">Add Meta Description</h5>
                                    <div class="input-group">
                                        <input type="text" name="meta_tags" class="form-control" placeholder="Enter Meta Tags" id="meta_tags">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="my-2">Add Content</h5>
                                    <div id="div_editor1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="my-2">Upload Image</h5>
                                <input id="logo_upload" name="logo_upload"
                                    type="file" class="logo_dropify" data-default-file=""
                                    data-allowed-file-extensions="pdf png jpg jpeg webp gif bmp tiff doc docx xls xlsx ppt pptx heic" >
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-dark ml-2" onclick="datapass();">Submit</button>
                            </div>
                        </div>
                                        
                    </form>
                </div>

            </div>
        </div>
    </div>  
      <script src={{ asset('admin-assets/js/text-editor.js') }}></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".logo_dropify").dropify();
            });
        </script>
@endsection
