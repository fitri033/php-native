<?php
class emailfitri
{
    protected $email = "fitri";
    private $password = "0333";
    public $nama = "fitriyanip";

    public function login()
    {
        $a = $this->email;
        $b = $this->password;
        if ($a == "fitri" && $b == "0333") {
            $c = "Login Berhasil";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->email;
        $b = $this->password;
        $d = $this->nama;
        $c = " Pemilik : " . $d . "<br>" . " email :" . $a;
        return $c;
    }
}
$fitri = new emailfitri();

echo $fitri->info() . "<br>";
echo "login : " . $fitri->login()
?>
