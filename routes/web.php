<?php

use App\Http\Controllers\Admin\Categories\CreateController as CategoriesCreate;
use App\Http\Controllers\Admin\Categories\DeleteController as CategoriesDelete;
use App\Http\Controllers\Admin\Categories\EditController as CategoriesEdit;
use App\Http\Controllers\Admin\Categories\IndexController as Categories;
use App\Http\Controllers\Admin\Categories\ShowController as CategoriesShow;
use App\Http\Controllers\Admin\Categories\StoreController as CategoriesStore;
use App\Http\Controllers\Admin\Categories\UpdateController as CategoriesUpdate;

use App\Http\Controllers\Admin\Users\CreateController as UsersCreate;
use App\Http\Controllers\Admin\Users\DeleteController as UsersDelete;
use App\Http\Controllers\Admin\Users\EditController as UsersEdit;
use App\Http\Controllers\Admin\Users\IndexController as Users;
use App\Http\Controllers\Admin\Users\ShowController as UsersShow;
use App\Http\Controllers\Admin\Users\StoreController as UsersStore;
use App\Http\Controllers\Admin\Users\UpdateController as UsersUpdate;

use App\Http\Controllers\Admin\Posts\CreateController as PostsCreate;
use App\Http\Controllers\Admin\Posts\DeleteController as PostsDelete;
use App\Http\Controllers\Admin\Posts\EditController as PostsEdit;
use App\Http\Controllers\Admin\Posts\IndexController as Posts;
use App\Http\Controllers\Admin\Posts\ShowController as PostsShow;
use App\Http\Controllers\Admin\Posts\StoreController as PostsStore;
use App\Http\Controllers\Admin\Posts\UpdateController as PostsUpdate;

use App\Http\Controllers\Admin\Tags\CreateController as TagsCreate;
use App\Http\Controllers\Admin\Tags\DeleteController as TagsDelete;
use App\Http\Controllers\Admin\Tags\EditController as TagsEdit;
use App\Http\Controllers\Admin\Tags\IndexController as Tags;
use App\Http\Controllers\Admin\Tags\ShowController as TagsShow;
use App\Http\Controllers\Admin\Tags\StoreController as TagsStore;
use App\Http\Controllers\Admin\Tags\UpdateController as TagsUpdate;

use App\Http\Controllers\Personal\Main\IndexController as Personal;
use App\Http\Controllers\Personal\Liked\IndexController as Liked;
use App\Http\Controllers\Personal\Liked\DeleteController as LikedDelete;
use App\Http\Controllers\Personal\Comment\IndexController as Comment;

use App\Http\Controllers\Main\IndexController as Main;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController as Admin;


Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [Main::class, 'index']);
});

Auth::routes(['verify' => true]);

Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [Personal::class, 'index'])->name('personal.main.index');
    });
     Route::group(['namespace' => 'Liked', 'prefix' => 'liked'], function () {
        Route::get('/', [Liked::class, 'index'])->name('personal.liked.index');
        Route::delete('/{post}', [LikedDelete::class, 'index'])->name('personal.liked.delete');
    });
      Route::group(['namespace' => 'Comment', 'prefix' => 'comments'], function () {
        Route::get('/', [Comment::class, 'index'])->name('personal.comment.index');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'verified', AdminMiddleware::class]], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [Admin::class, 'index'])->name('admin.main.index');
    });
    Route::group(['namespace' => 'Posts', 'prefix' => 'posts'], function () {
        Route::get('/', [Posts::class, 'index'])->name('admin.posts.index');
        Route::get('/create', [PostsCreate::class, 'index'])->name('admin.posts.create');
        Route::post('/store', [PostsStore::class, 'index'])->name('admin.posts.store');
        Route::get('/{post}', [PostsShow::class, 'index'])->name('admin.posts.show');
        Route::get('/{post}/edit', [PostsEdit::class, 'index'])->name('admin.posts.edit');
        Route::patch('/{post}', [PostsUpdate::class, 'index'])->name('admin.posts.update');
        Route::delete('/{post}', [PostsDelete::class, 'index'])->name('admin.posts.delete');;
    });
    Route::group(['namespace' => 'Categories', 'prefix' => 'categories'], function () {
        Route::get('/', [Categories::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [CategoriesCreate::class, 'index'])->name('admin.categories.create');
        Route::post('/store', [CategoriesStore::class, 'index'])->name('admin.categories.store');
        Route::get('/{category}', [CategoriesShow::class, 'index'])->name('admin.categories.show');
        Route::get('/{category}/edit', [CategoriesEdit::class, 'index'])->name('admin.categories.edit');
        Route::patch('/{category}', [CategoriesUpdate::class, 'index'])->name('admin.categories.update');
        Route::delete('/{category}', [CategoriesDelete::class, 'index'])->name('admin.categories.delete');;
    });
    Route::group(['namespace' => 'Tags', 'prefix' => 'tags'], function () {
        Route::get('/', [Tags::class, 'index'])->name('admin.tags.index');
        Route::get('/create', [TagsCreate::class, 'index'])->name('admin.tags.create');
        Route::post('/store', [TagsStore::class, 'index'])->name('admin.tags.store');
        Route::get('/{tag}', [TagsShow::class, 'index'])->name('admin.tags.show');
        Route::get('/{tag}/edit', [TagsEdit::class, 'index'])->name('admin.tags.edit');
        Route::patch('/{tag}', [TagsUpdate::class, 'index'])->name('admin.tags.update');
        Route::delete('/{tag}', [TagsDelete::class, 'index'])->name('admin.tags.delete');;
    });
    Route::group(['namespace' => 'Users', 'prefix' => 'users'], function () {
        Route::get('/', [Users::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UsersCreate::class, 'index'])->name('admin.user.create');
        Route::post('/store', [UsersStore::class, 'index'])->name('admin.user.store');
        Route::get('/{user}', [UsersShow::class, 'index'])->name('admin.user.show');
        Route::get('/{user}/edit', [UsersEdit::class, 'index'])->name('admin.user.edit');
        Route::patch('/{user}', [UsersUpdate::class, 'index'])->name('admin.user.update');
        Route::delete('/{user}', [UsersDelete::class, 'index'])->name('admin.user.delete');;
    });
});


