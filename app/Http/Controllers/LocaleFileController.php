<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class LocaleFileController extends Controller
{
    private $lang = 'ru';
    private $file;
    private $key;
    private $value;
    private $path;
    private $arrayLang = [];

    public function changeLang(Request $request)
    {
// Process and prepare you data as you like.

        $this->lang = '';
        $this->file = 'shop';
        $this->key = 'productGroup';
        $this->value = 'whatever';

// END - Process and prepare your data

        $this->changeLangFileContent();
        //$this->deleteLangFileContent();

        return view('admin/index');
    }

    private function changeLangFileContent($lang, $file, $key, $value)
    {
        $this->read();
        $this->arrayLang[$this->key] = $this->value;
        $this->save();
    }

    private function deleteLangFileContent()
    {
        $this->read();
        unset($this->arrayLang[$this->key]);
        $this->save();
    }

    private function read()
    {
        if ($this->lang == '') $this->lang = App::getLocale();
        $this->path = base_path().'/resources/lang/'.$this->lang.'/'.$this->file.'.php';
        $this->arrayLang = Lang::get($this->file);
        if (gettype($this->arrayLang) == 'string') $this->arrayLang = array();
    }

    public function save()
    {
        $content = "<?php\n\nreturn\n[\n";

        foreach ($this->arrayLang as $this->key => $this->value)
        {
            $content .= "\t'".$this->key."' => '".$this->value."',\n";
        }

        $content .= "];";

        file_put_contents($this->path, $content);
    }
}
