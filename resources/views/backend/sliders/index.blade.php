@extends('backend.layouts.default')
@push('custom-script')

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
    $("#ok").click(function(){
        var _caption  = $("#caption").val();var _description=$("#description").val(); var _sort_order = $("#sort_order").val();var _title =$("#title").val();var _permalink =$("#permalink").val()
       var _image = $("#image").val(); var _enabled=0; var _featured= 0; var _published = 1; _featured = document.getElementById("featured").checked ? 1 :0;//_published = document.getElementById("published").checked ? 1 :0 
        $.post('{{route("admin.sliders.store")}}', {_token: $('meta[name="csrf-token"]').attr('content'),
            image:_image,title:_title,permalink:_permalink,caption: _caption,description: _description,featured: _featured, published: _published,sort_order: _sort_order
            }).then(
                function(response){
                    if( response.success == true ) {
                        swal("Record Save Successful!", response.msg, "success");
                        setTimeout(function(){window.location.reload()},600);
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
    $(".success").click(function(){
        $("#ok").css("display","inline-block")
        $("#okEdit").css("display","none")
        $('#caption').val("")
        $('#description').val("")
        $('#sort_order').val("")
        $("#imgS").attr("src","")
        $("#image").val("")
        $('#id').val("")
        $('#featured').removeAttr("checked")
        $('#enabled').removeAttr("checked")
        Metro.dialog.open('#demoDialog1')
    })

    $("#okEdit").click(function(){
        var _caption  = $("#caption").val();var _description=$("#description").val(); var _sort_order = $("#sort_order").val();var _title =$("#title").val();var _permalink =$("#permalink").val()
       var _image = $("#image").val(); var _enabled=0; var _featured= 0; var _published = 1; _featured = document.getElementById("featured").checked ? 1 :0;//_published = document.getElementById("published").checked ? 1 :0 
       
       var postUrl = $(this).data('url')

       $.post(postUrl, {_token: $('meta[name="csrf-token"]').attr('content'),
       image:_image,title:_title,permalink:_permalink, caption:_caption,description: _description,featured: _featured, published: _published,sort_order: _sort_order
            }).then(
                function(response){
                    if( response.success == true ) {
                        swal("Record Save Successful!", response.msg, "success");
                        setTimeout(function(){window.location.reload()},600);
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
                        $('#caption').val(data.data.caption)
                        $('#description').val(data.data.description)
                        $('#image').val(data.data.image)
                        $('#sort_order').val(data.data.sort_order)
                        $("#imgS").attr("src",data.data.image)
                        $("#image").val(data.data.image)
                        $('#id').val(data.data.id)
                        $('#url').val(postUrl)
                        $('#title').val(data.data.title)
                        $('#permalink').val(data.data.permalink)
                        if(data.data.featured === 1){
                            $('#featured').attr("checked","checked")
                        }else{
                            $('#featured').removeAttr("checked")
                        }
                        
                        if(data.data.enabled === 1){
                            $('#enabled').attr("checked","checked")
                        }else{
                            $('#enabled').removeAttr("checked")
                        }
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
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-primary">
        Add New
      </button>
    <table class="table striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Image</th>
            <th>Sort Order</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($sliders) >0)
       @php $x=0 @endphp
        @foreach($sliders as $slider)
        @php $x++ @endphp
        <tr>
            <td>{{$x}}</td>
            <td><img src="{{$slider->image}}" width="100" height="50" ></td>
            <td>{{$slider->title}}</td>
            
            <td>{{$slider->sort_order}}</td>
            <td>
                <a url="{{route('admin.sliders.update',['id'=>$slider->id])}}" data-link ="{{route('admin.sliders.edit',['id'=>$slider->id])}}" data-id="{{$slider->id}}" class="button primary mt-1 icon-edit"><span class="mif-pencil"></span></a>
                <a url="{{route('admin.sliders.delete',['id'=>$slider->id])}}" data-delurl="{{route('admin.sliders.delete',['id'=>$slider->id])}}" data-id="{{$slider->id}}" class="button alert  mt-1 icon-delete"><span class="mif-bin" ></span></a>
            </td>
        </tr>
        @endforeach
        @else
       
        <tr>
            <td colspan="4"> No record found</td>
            
        </tr>
       
        @endif
        
        
       
        </tbody>
    </table>
</div>


<div class="modal modal-primary fade" id="modal-primary">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add Slider Images</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          
        </div>
        <div class="modal-body">
            <button style='inline' id="ckfinder-popup" class="btn bt-primary" style="float: left">Open Popup</button>  
            <img style='inline' id='imgS' width="50" height="50">
            <div id="output" style="display:none" >
                    <span id="file-name" ></span>
                    <span id="file-url" ></span>
            </div>
    
            <div class="row m-0">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Title</label>
                        <input class="form-control" data-role="input" id="title"   type="text">
                        <input  id="permalink"   type="hidden">
                    </div>
                </div>
            </div>
            
            <div class="row m-0">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Caption</label>
                    <input type="hidden" id="image" >
                    <input type="hidden" id="id" >
                    <input type="hidden" id="url" >
                        <input class="form-control" data-role="input" id="caption"   type="text">
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Description</label>
                        <textarea class="form-control"  id="description"  ></textarea>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Sort Order</label>
                        <input class="form-control" id="sort_order"   type='text' ></textarea>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12" >
                    <label class="checkbox-inline">
                        <input type="checkbox" data-role="checkbox" id="featured"  value="1" class="checkbox style-0">
                        <span>Featured</span>
                    </label>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12" >
                    <label class="checkbox-inline">
                        <input type="checkbox" data-role="checkbox" id="enabled"  value="1" class="checkbox style-0">
                        <span>Enabled</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a class="button js-dialog-close">Disagree</a>
            <a id="ok" class="btn btn-primary">Save</a>
            <a id='okEdit' data-url="" style="display:none" class="btn  btn-primary">Update</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

@endsection