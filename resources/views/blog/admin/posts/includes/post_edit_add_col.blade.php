@php /** @var \App\Models\BlogCategory $item */ @endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Сохранить</button>
                <a href="{{route('blog.admin.posts.index')}}" class="btn btn-primary">Публикации</a>
            </div>
        </div>
    </div>
</div>

@if($item->exists)
    <br>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="list-unstyled">
                    <li>ID: {{$item->id}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="created_at">Создано</label>
                    <input name="created_at" type="text" value="{{$item->created_at}}" id="title" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="updated_at">Изменено</label>
                    <input name="updated_at" type="text" value="{{$item->updated_at}}" id="updated_at" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="published_at">Изменено</label>
                    <input name="published_at" type="text" value="{{$item->published_at}}" id="published_at" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="deleted_at">Удалено</label>
                    <input name="deleted_at" type="text" value="{{$item->deleted_at}}" id="deleted_at" class="form-control" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endif

