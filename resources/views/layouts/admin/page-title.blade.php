<div class="page-title">
    <div class="full_title">
        <div class="container">
            <ol class="breadcrumb breadcrumb-arrow">
                <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i> Home </a></li>
                @isset($crumbs['group'])
                    <li><a href="/admin/{{str_slug($crumbs['group'])}}"><i
                                    class="{{$crumbs['icon']}}"></i> {{slugToTitle($crumbs['group'])}}</a></li>@endisset
                @isset($crumbs['subgroup'])
                    <li>
                        <a href="/admin/{{str_slug($crumbs['group'])}}/{{str_slug($crumbs['subgroup'])}}"> {{slugToTitle($crumbs['subgroup'])}}</a>
                    </li>@endisset
                <li class="active"><span>{{$crumbs['title']}}</span></li>
            </ol>
        </div>
    </div>
</div>