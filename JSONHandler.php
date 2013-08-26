class JSONHandler
{

	public $path = "";

	public function __construct($path)
	{
		$this->path = $path;
	}

	public function read()
	{
		return json_decode(file_get_contents($this->path));
	}

	function write($value)
	{
		$data = $this->read();
		array_push($data, $value);
		file_put_contents($this->path, json_encode($data));
	}

	function delete($value)
	{
		$data = $this->read();
		foreach(array_keys($data,$value) as $key) unset($data[$key]);
		file_put_contents($this->path, json_encode($data));
	}
}
