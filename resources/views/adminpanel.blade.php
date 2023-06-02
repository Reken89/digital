<p>Админ панель</p>

<form action="/digital/public/admin/upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="file" name="image">
    </div>
    </br>
    <p>Стоимость товара</p>
    <input type="text" name="price" value="">
    </br>
    
    <p>Название</p>
    <input type="text" name="name" value="">
    </br>
    
    <p>Описание</p>
    <input type="text" name="description" value="">
    </br>
    
    <p>Размер</p>
    <input type="text" name="size" value="">
    </br>
    
    <p><select size="3" multiple name="category">
    <option disabled>Категория</option>
    <option value="1">Джинсы</option>
    <option value="2">Сумки</option>
    <option value="3">Обувь</option>
    </select></p>
    </br>
    <button class="btn btn-default" type="submit">Загрузка</button>
</form>

