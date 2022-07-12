# RestAPLaravel
Creación de Rest API con Laravel, transforma los datos de una base de datos(MYSQL) en formato JSON 


## Pasos para dar pie al acceso de la rest API con Laravel

Installamos corsheaders

    php artisan make:middleware Cors


Aladimos las rutas en en Middleware creado 

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request)
        //Url a la que se le dará acceso en las peticiones 
        ->header("Access-Control-Allow-Origin", "*")
        //Métodos que a los que se da acceso
        ->header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE")
        //Headers de la petición
        ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization"); 

        return $response;
    }

Añadimos las rutas al kernel

    protected $middleware = [
        ...,
        \App\Http\Middleware\Cors::class,
        ...
    ];

Regsitramos la ruta al kernel

    protected $routeMiddleware = [
        ...,
        'cors' => \App\Http\Middleware\Cors::class,
        ...
    ];