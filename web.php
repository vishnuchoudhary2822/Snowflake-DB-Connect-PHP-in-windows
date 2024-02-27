use App\Http\Controllers\SnowflakeController;

Route::get('/snowflake', [SnowflakeController::class, 'connect']);
