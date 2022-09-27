<?php //23153f09bbd47fa81c1c3efd10755b46
/** @noinspection all */

namespace App\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_Comment_C;
    use LaravelIdea\Helper\App\Models\_IH_Comment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Post_C;
    use LaravelIdea\Helper\App\Models\_IH_Post_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property _IH_Post_C|Post[] $posts
     * @property-read int $posts_count
     * @method BelongsToMany|_IH_Post_QB posts()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @foreignLinks 
     * @mixin _IH_Category_QB
     */
    class Category extends Model {}
    
    /**
     * @property int $id
     * @property string $body
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property int $user_id
     * @property int $post_id
     * @property Post $post
     * @method BelongsTo|_IH_Post_QB post()
     * @method static _IH_Comment_QB onWriteConnection()
     * @method _IH_Comment_QB newQuery()
     * @method static _IH_Comment_QB on(null|string $connection = null)
     * @method static _IH_Comment_QB query()
     * @method static _IH_Comment_QB with(array|string $relations)
     * @method _IH_Comment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Comment_C|Comment[] all()
     * @ownLinks user_id,\App\Models\User,id|post_id,\App\Models\Post,id
     * @mixin _IH_Comment_QB
     */
    class Comment extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string $slug
     * @property string $body
     * @property string $excerpt
     * @property string|null $thumbnail
     * @property Carbon $published_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property int $user_id
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Post_C|Post[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\App\Models\Comment,post_id
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property string|null $avatar
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\App\Models\Post,user_id|id,\App\Models\Comment,user_id
     * @mixin _IH_User_QB
     */
    class User extends Model {}
}