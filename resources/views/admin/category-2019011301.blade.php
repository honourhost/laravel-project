@extends('base.base')
@section('base')
    <!-- 内容区域 -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-wrench"></i>
                    </span>
                    分类
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">cms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">分类列表</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">列表</h4>
                            <p class="card-description">
                                <button type="button" class="btn btn-sm btn-gradient-success btn-icon-text" onclick="add()">
                                    <i class="mdi mdi-plus btn-icon-prepend"></i>
                                    添加
                                </button>
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>名称</th>
                                    <th>图标</th>
                                    <th>上一级ID</th>
                                    <th>创建时间</th>
                                    <th>更新时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $k=>$v)
                                    <tr>
                                        <td>{{ $v->id }}</td>
                                        <td>{{ $v->name }}</td>
                                        <td><i class="{{ $v->icon }}">　</i>   </td>
                                        <td>{{ $v->pid }}</td>
                                        <td>{{ $v->created_at }}</td>
                                        <td>{{ $v->updated_at }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-gradient-dark btn-icon-text" onclick="update({{ $v->id }})">
                                                修改
                                                <i class="mdi mdi-file-check btn-icon-append"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-gradient-danger btn-icon-text" onclick="del({{ $v->id }})">
                                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                                删除
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function add(){
            var page = layer.open({
                type: 2,
                title: '添加',
                shadeClose: true,
                shade: 0.8,
                area: ['70%', '90%'],
                content: '/admin/cms/category/add'
            });
        }
        function update(id){
            var page = layer.open({
                type: 2,
                title: '修改',
                shadeClose: true,
                shade: 0.8,
                area: ['70%', '90%'],
                content: '/admin/cms/category/update/'+id
            });
        }
        function del(id){
            myConfirm("删除操作不可逆,是否继续?",function(){
                myRequest("/admin/cms/category/del/"+id,"post",{},function(res){
                    layer.msg(res.msg)
                    setTimeout(function(){
                        window.location.reload();
                    },1500)
                });
            });
        }

        $('.menu-switch').click(function(){
            id = $(this).attr('id');
            state = $(this).attr('state');
            console.log(id)
            console.log(state)
            if(state == "on"){
                $('.pid-'+id).hide();
                $(this).attr("state","off")
                $(this).removeClass('mdi-menu-down').addClass('mdi-menu-right');
            }else{
                $('.pid-'+id).show();
                $(this).attr("state","on")
                $(this).removeClass('mdi-menu-right').addClass('mdi-menu-down');
            }
        })
    </script>
@endsection