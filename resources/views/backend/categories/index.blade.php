@extends('backend.layouts.default')
@push('page-script')

@include('ckfinder::setup')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
var button = document.getElementById( 'ckfinder-popup' );
    button.onclick = function() {
        CKFinder.popup( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
					var outputFileName = document.getElementById( 'file-name' );
					var outputFileUrl = document.getElementById( 'file-url' );
                    outputFileName.innerText = 'Selected: ' + file.get( 'name' );
                    outputFileUrl.innerText = 'URL: ' + file.getUrl();
                    document.getElementById('image').value = (file.getUrl())
                    document.getElementById('imgS').src = file.getUrl()
                   
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
					var outputFileName = document.getElementById( 'file-name' );
					var outputFileUrl = document.getElementById( 'file-url' );
					outputFileName.innerText = 'Selected resized image: ' + evt.data.file.get( 'name' );
					outputFileUrl.innerText = 'URL: ' + evt.data.resizedUrl;
                    document.getElementById('image').value = evt.data.resizedUrl;
                    document.getElementById('imgS').src = evt.data.resizedUrl;
                   
                } );
            }
        } );
    };

    $("#title").keyup(function(){
        perma = $(this).val()
        perma = perma.replace(/\s/g,"-")
        perma = perma.toLowerCase()
        $("#permalink").val(perma)
    });
    $(".success").click(function(){
        $("#ok").css("display","inline-block")
        $("#okEdit").css("display","none")
        Metro.dialog.open('#demoDialog1')
        $("#title").val("")
        $("#caption").val("")
        $("#description").val("")
        $("#permalink").val("")
        $("#image").val("")
        $("#imgS").attr("src","")
    })
    $("#ok").click(function(){
       var _title  = $("#title").val();var _caption=$("#caption").val(); var _description = $("#description").val(); var _permalink = $("#permalink").val();
       //var _sort_order = $("#sort_order").val()
       var _image = $("#image").val();
       //var _enabled=false; var _featured= false; var _published = false; 
       //_featured = document.getElementById("featured").checked ? true :false;_published = document.getElementById("published").checked ? true :false 
        $.post('{{route("admin.categories.store")}}', {_token: $('meta[name="csrf-token"]').attr('content'),
            image:_image,title: _title,caption: _caption, description: _description,post_type: "category",permalink : _permalink
            }).then(
                function(response){
                    if( response.success == true ) {
                        swal("Record Save Successful!", response.msg, "success");
                        setTimeout(function(){window.location.reload()},6000);
                    }else{
                        swal("Record saving failed", response.msg, "info")
                    }
                },
                function(xhr){
                    console.log(xhr.status, xhr.statusText);
                    var response = JSON.parse(xhr.responseText);
                    if (response.errors) {
                        var errorString = '<ul>';
                        $.each(response.errors, function( key, value) {
                            errorString += '<li>' + value + '</li>';
                        });
                        errorString += '</ul>';
                        swal("Unexpected Error!", errorString, "error")
                    }
                }
            )
       
    }) 
    $("#okEdit").click(function(){
       var _title  = $("#title").val();var _caption=$("#caption").val(); var _description = $("#description").val(); var _permalink = $("#permalink").val();
       //var _sort_order = $("#sort_order").val()
       var _image = $("#image").val();
       var url = $(this).data("url")
       //var _enabled=false; var _featured= false; var _published = false; 
       //_featured = document.getElementById("featured").checked ? true :false;_published = document.getElementById("published").checked ? true :false 
        $.post(url, {_token: $('meta[name="csrf-token"]').attr('content'),
            image:_image,title: _title,caption: _caption, description: _description,post_type: "category",permalink : _permalink
            }).then(
                function(response){
                    if( response.success == true ) {
                        swal("Record Save Successful!", response.msg, "success");
                        setTimeout(function(){window.location.reload()},6000);
                    }else{
                        swal("Record saving failed", response.msg, "info")
                    }
                },
                function(xhr){
                    console.log(xhr.status, xhr.statusText);
                    var response = JSON.parse(xhr.responseText);
                    if (response.errors) {
                        var errorString = '<ul>';
                        $.each(response.errors, function( key, value) {
                            errorString += '<li>' + value + '</li>';
                        });
                        errorString += '</ul>';
                        swal("Unexpected Error!", errorString, "error")
                    }
                }
            )
       
    })
    
    $(".icon-edit").each(function () {
        $(this).click(function (e) {
            $("#ok").css("display","none")
        $("#okEdit").css("display","inline-block")
            var url = $(this).attr('data-link')
            var postUrl = $(this).attr('url')
            id = $(this).data("id")
            $("#okEdit").attr("data-url",postUrl)
            $.ajax({
                url: url, type: 'get', data: {'id': id}, dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        console.log(data.data)
                        $('#title').val(data.data.title)
                        $('#permalink').val(data.data.permalink)
                        $('#image').val(data.data.image)
                        $("#imgS").attr("src",data.data.image)
                        $('#description').val(data.data.description)
                        $('#caption').val(data.data.caption)
                       
                        /* if(data.data.featured === 1){
                            $('#featured').attr("checked","checked")
                        }else{
                            $('#featured').removeAttr("checked")
                        }
                        if(data.data.published === 1){
                            $('#published').attr("checked","checked")
                        }else{
                            $('#published').removeAttr("checked")
                        }
                        if(data.data.enabled === 1){
                            $('#enabled').attr("checked","checked")
                        }else{
                            $('#enabled').removeAttr("checked")
                        } */
                        Metro.dialog.open('#demoDialog1')
                    }
                }
            });
            return;
        })
    })

</script>  
@endpush
@section('content')
<div class="bg-white p-4 mt-2 h-100">
    <button class="image-button success mt-1" >
        <span class="mif-plus icon"></span>
        <span class="caption">Add New</span>
    </button>
    
    <h5>Categories</h5>
    <hr>
    <table class="table striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Sort Order</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($categories) >0)
        @php $x=0 @endphp
        @foreach($categories as $category)
        @php $x++ @endphp
        <tr>
        <td>{{$x}}</td>
            <td>{{$category->title}} </td>
            <td>{{$category->description}} </td>
            <td>{{$category->sort_order}}</td>
            <td>
                <a url="{{route('admin.categories.update',['id'=>$category->id])}}" data-link ="{{route('admin.categories.edit',['id'=>$category->id])}}" data-id="{{$category->id}}" class="button primary mt-1 icon-edit"><span class="mif-pencil"></span></a>
                <a url="{{route('admin.categories.delete',['id'=>$category->id])}}" data-delurl="{{route('admin.categories.delete',['id'=>$category->id])}}" data-id="{{$category->id}}" class="button alert  mt-1 icon-delete"><span class="mif-bin" ></span></a>
            </td>
        </tr>
        @endforeach
        @else
       
        <tr>
            <td colspan="5"> No record found</td>
            
        </tr>
       
        @endif
        </tbody>
    </table>
</div>
<div id="demoDialog1" class="dialog" data-role="dialog">
    {{-- {!! Form::open(['route'=>'admin.helpdesks.store','method'=>'post', 'class' => '','id'=>'mPackage','novalidate'=>'novalidate']) !!} --}}
    <div class="dialog-title">Add Category</div>
    <div class="dialog-content">
    <button style='inline' id="ckfinder-popup" class="button button-a button-a-background" style="float: left">Open Popup</button>  
    <img style='inline' id='imgS' width="50" height="50">
    <div id="output" style="display:none" >
            <span id="file-name" ></span>
            <span id="file-url" ></span>
    </div>
        <div class="row m-0">
            <div class="cell-lg-12" >
                <div class="form-group">
                    <label>Title</label>
                    <input type="hidden" name="image" id="image">
                    <input type="hidden" name="permalink" id="permalink">
                    <input class="form-control" data-role="input" id="title" name="title"  type="text">
                </div>
            </div>
        </div>
        
        <div class="row m-0">
            <div class="cell-lg-12" >
                <div class="form-group">
                    <label>Caption</label>
                    <input class="form-control" data-role="input" id="caption" name="caption"  type="text">
                </div>
            </div>
        </div>
        
        <div class="row m-0">
            <div class="cell-lg-12">
                <div class="form-group">
                <label>Description</label>
                    <textarea class="form-control"  id="description" name="description"  ></textarea>
                </div>
            </div>
        </div>
        
    </div> 
    <div class="dialog-actions">
        <a class="button js-dialog-close">Cancel</a>
        <a id='ok' class="button primary">Save</a>
        <a id='okEdit' data-url="" style="display:none" class="button primary">Update</a>
    </div>
    {{-- {!! Form::close() !!} --}}
</div>
@endsection
