
namespace Simp/Controllers;

class LoginController
{

    public function main()
    {

    }

    public function login()
    {
        $view = loadLogin(['user']);
    }

    private function loadLogin($data)
    {
        $view = view('login', $data);
        return $view;
    }
}
