<template>
    <!-- BEGIN CATEGORY MENU -->
    <div class="col-12 category-link">
        <div class="category-link__sort">
            <a href="#" class="icon-cards-default"></a>
            <a href="#" class="icon-list-default"></a>
            <a href="#" class="icon-calendar-default category-link__sort--active"></a>
        </div>
        <ul class="category-link__list d-none d-md-flex">
            <li class="active"><a href="#">Avresa</a></li>
            <li><a href="#">Längd</a></li>
            <li><a href="#">Pris</a></li>
            <li><a href="#">Alfabetisk</a></li>
            <li><a href="#">Bedömning</a></li>
            <li><a href="#">Popularitet</a></li>
        </ul>
        <form action="" class="category-link__form d-flex d-md-none">
            <label for="link-1">
                <select name="links" id="link-1">
                    <option value="1">Avresa</option>
                    <option value="2">Längd</option>
                    <option value="3">Pris</option>
                    <option value="4">Alfabetisk</option>
                    <option value="5">Bedömning</option>
                    <option value="6">Popularitet</option>
                </select>
            </label>
        </form>
    </div>
    <!-- END CATEGORY MENU -->
</template>

<script>
    export default {

    }
</script>
