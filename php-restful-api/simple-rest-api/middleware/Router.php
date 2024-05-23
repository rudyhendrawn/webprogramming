<?php
/**
 * Class Router
 * 
 * The Router class handles the registration and dispatching of routes.
 */
class Router
{
	/**
	 * @var array $routes An associative array to store registered routes.
	 */
	private $routes = [];

	/**
	 * Register a route with the specified method, path, and action.
	 *
	 * @param string $method The HTTP method for the route.
	 * @param string $path The path for the route.
	 * @param callable $action The action to be executed when the route is matched.
	 * @return void
	 */
	public function register($method, $path, $action)
	{
		$this->routes[strtoupper($method)][$path] = $action;
	}

	/**
	 * Dispatches the request to the appropriate action based on the method and URI.
	 *
	 * @param string $method The HTTP method of the request.
	 * @param string $uri The URI of the request.
	 * @return void
	 */
	public function dispatch($method, $uri)
	{
		$method = strtoupper($method);
		if (isset($this->routes[$method][$uri]))
		{
			call_user_func($this->routes[$method][$uri]);
		}
		else
		{
			http_response_code(404);
			header('Content-Type: application/json');
			echo json_encode([
				'success' => false,
				'message' => 'Resource not found.'
			]);
		}
	}
}