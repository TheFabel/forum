<div class="header">
    <div class="row`">
        <div class="ml-auto mb-2 col-12 col-sm-4">
            <form action="/search" method="get">
                <input type="text" class="form-control" name="search" placeholder="Поиск" value="{{isset($search) ? $search : ''}}">
            </form>
        </div>
    </div>
</div>