<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_9cefab6fcf8c77cff17f1fb5eecebc7314844576f0bfb8ab47ed4b4e8f4e0a9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link href=\"css/output.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"assets/font-awesome/css/font-awesome.min.css\">
  <title>Niaga Hoster</title>
</head>

<body class=\"p-0 m-0 text-gray-700\">
  <div class=\"mx-auto\">
    <header class=\"hidden lg:block w-full\">
      <section class=\"lg:max-w-screen-lg max-w-full mx-auto\">
        <div class=\"lg:flex lg:flex-row lg:flex-wrap py-3\">
          <div class=\"lg:w-1/2 lg:text-xs font-light w-full\">Gratis Ebook 9 Cara Cerdas Menggunakan Domain</div>
          <div class=\"lg:w-1/2 lg:text-xs lg:text-right w-full font-light mt-2 lg:mt-0\">
            <a class=\"mr-3\"><i class=\"fa fa-phone mr-1\"></i> 0813 1789 7551</a>
            <a class=\"mr-3\"><i class=\"fa fa-comment mr-1\"></i> Live Chat</a>
            <a class=\"mr-3\"><i class=\"fa fa-user mr-1\"></i> Member Area</a>
          </div>
        </div>
      </section>
      <hr class=\"border-b-gray-400 border-b-inherit \" />
      <section class=\"lg:max-w-screen-lg mx-auto\">
        <div class=\"lg:flex lg:flex-row\">
          <div class=\"lg:basis-3/12 text-xs font-light py-5\">
            <img src=\"assets/images/logo-mobile.svg\" class=\"lg:max-h-10 w-32 mx-auto\" />
          </div>
          <div class=\"lg:basis-9/12 text-sm lg:text-right font-light py-5\">
            <ul class=\"inline-flex h-10 place-items-center\">
              <li><a class=\"mr-3\">Hosting</a></li>
              <li><a class=\"mr-3\">Domain</a></li>
              <li><a class=\"mr-3\">Server</a></li>
              <li><a class=\"mr-3\">Website</a></li>
              <li><a class=\"mr-3\">Afiliasi</a></li>
              <li><a class=\"mr-3\">Promo</a></li>
              <li><a class=\"mr-3\">Pembayaran</a></li>
              <li><a class=\"mr-3\">Review</a></li>
              <li><a class=\"mr-3\">Kontak</a></li>
              <li><a class=\"mr-3\">Blog</a></li>
            </ul>
          </div>
        </div>
      </section>
      <hr class=\"border-b-gray-400 border-b-inherit \" />
    </header>
    <header
      class=\"lg:hidden flex justify-between items-center relative w-full border-b border-stone-400 border-inherit h-20\">
      <div class=\"w-2/12 items-center\">
        <img src=\"assets/images/logo-mobile.svg\" class=\"w-1/2 ml-10 items-center\" />
      </div>
      <div class=\"w-10/12 items-center text-xs\">
        <a class=\"mr-3 right-20 absolute border px-5 py-2 rounded-full border-stone-700\"><i class=\"fa fa-user mr-1\"></i>
          Member Area</a>
        <button id=\"hamburger_button\" class=\"block absolute hamburger_button right-4\">
          <span class=\"hamburger_bar hamburger_bar_1\"></span>
          <span class=\"hamburger_bar hamburger_bar_1\"></span>
          <span class=\"hamburger_bar hamburger_bar_1\"></span>
        </button>
        <nav id=\"nav\" class=\"hidden absolute right-4 top-20 text-white bg-stone-700 w-full border py-4 px-2 font-thin\">
          <ul class=\"block\">
            <ul class=\"place-items-center\">
              <li class=\"hidden sm:block group border-b border-stone-600 py-2\">
                <div class=\"mx-8\">
                  <a class=\"mr-3\"><i class=\"fa fa-phone mr-1\"></i> 0813 1789 7551</a>
                  <a class=\"mr-3\"><i class=\"fa fa-comment mr-1\"></i> Live Chat</a>
                </div>
              </li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Hosting</a></li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Domain</a></li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Server</a></li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Website</a></li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Afiliasi</a>
              </li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Promo</a></li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Pembayaran</a>
              </li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Review</a></li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Kontak</a></li>
              <li class=\"group border-b border-stone-600 py-2\"><a class=\"mx-8\">Blog</a></li>
            </ul>
          </ul>
        </nav>
      </div>
    </header>
    <section class=\"max-w-screen-lg mx-auto py-10\">
      <div class=\"md:flex md:flex-row px-6\">
        <div class=\"md:basis-5/12 leading-loose\">
          <h1 class=\"text-3xl font-bold font-title\">PHP Hosting</h1>
          <h2 class=\"text-3xl font-light\"> Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
          <p class=\"pt-3\">
          <ul class=\"font-thin\">
            <li><i class=\"fa fa-check-circle text-green-700\"></i> Solusi PHP untuk performa query yang lebih cepat</li>
            <li><i class=\"fa fa-check-circle text-green-700\"></i> Konsumsi memori lebih rendah</li>
            <li><i class=\"fa fa-check-circle text-green-700\"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
            <li><i class=\"fa fa-check-circle text-green-700\"></i> Fitur enkripsi IonCube dan Zend Guard Loaders</li>
          </ul>
          </p>
        </div>
        <div class=\"md:basis-2/12\"></div>
        <div class=\"md:basis-5/12 text-right\">
          <img src=\"assets/svg/illustration banner PHP hosting-01.svg\" class=\"max-h-max max-w-min\" />
        </div>
      </div>
    </section>
    <hr class=\"border-b-gray-400 border-b-inherit \" />
    <section class=\"lg:max-w-screen-lg mx-auto py-5\">
      <div class=\"grid grid-cols-2 font-thin text-gray-400 md:grid-cols-3\">
        <div class=\"text-center p-10\">
          <div class=\"text-center\">
            <img src=\"assets/svg/icon PHP Hosting_garansi uptime.svg\" class=\"max-h-32 mx-auto opacity-60\" />
          </div>
          <div>
            Uptime Guaranteed
          </div>
        </div>
        <div class=\"text-center p-10\">
          <div>
            <img src=\"assets/svg/icon PHP Hosting_My SQL remote.svg\" class=\"max-h-32 mx-auto opacity-60\" />
          </div>
          <div>
            Database
          </div>
        </div>
        <div class=\"text-center p-10\">
          <div>
            <img src=\"assets/svg/icon PHP Hosting_PHP Semua Versi.svg\" class=\"max-h-32 mx-auto opacity-60\" />
          </div>
          <div class=\"content-end\">
            Support All PHP Version
          </div>
        </div>
      </div>
    </section>
    <section class=\"max-w-screen-lg mx-auto py-5 sm:px\">
      <p class=\"text-center font-thin\">
        <span class=\"font-bold text-xl font-title\">Paket Hosting Singapura yang Tepat</span><br />
        Diskon 40% + Domain dan SSL Gratis untuk Anda
      </p>
    </section>
    <section class=\"lg:max-w-screen-lg mx-auto\">
      <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 text-center max-auto md:px-0 px-4\">
        <div class=\"\">
          <div class=\"text-2xl border-inherit border border-slate-200 md:border-r-0 py-2 font-extrabold font-title\">Bayi
          </div>
          <div class=\"border-inherit border border-slate-200 py-2 border-t-0 md:border-r-0\">
            <span class=\"line-through\tfont-light\">19.900</span><br />
            <span class=\"font-normal\"><sup>Rp</sup> <span class=\"text-4xl font-bold\">14</span><sup
                class=\"font-bold\">.900/ bln</sup></span>
          </div>
          <div class=\"border-inherit border border-slate-200 py-2 font-extralight border-t-0 md:border-r-0\">
            938 Pengguna Terdaftar
          </div>
          <div class=\"pt-5 font-thin text-sm border border-slate-200 border-t-0 md:border-r-0\">
            <ul class=\"leading-loose\">
              <li><strong>0.5 RESOURCE POWER</strong></li>
              <li><span class=\"font-bold\">500 MB</span> Disk Space</li>
              <li><span class=\"font-bold\">Unlimited</span> Bandwidth</li>
              <li><span class=\"font-bold\">Unlimited</span> Database</li>
              <li><span class=\"font-bold\">1</span> Domain</li>
              <li><span class=\"font-bold\">Instant</span> Backup</li>
              <li><span class=\"font-bold\">Unlimited SSL</span> Gratis Selamanya</li>
            </ul>

            <button class=\"border-2 font-bold border-black rounded-full py-2 px-5 my-6\">Pilih Sekarang</button>
          </div>
        </div>
        <div class=\"\">
          <div class=\"text-2xl border-inherit border border-slate-200 py-2 lg:border-r-0 font-extrabold font-title\">
            Pelajar</div>
          <div class=\"border-inherit border border-slate-200 py-2 border-t-0 lg:border-r-0\">
            <span class=\"line-through\tfont-light\">46.900</span><br />
            <span class=\"font-normal\"><sup>Rp</sup> <span class=\"text-4xl font-bold\">23</span><sup
                class=\"font-bold\">.450/ bln</sup></span>
          </div>
          <div class=\"border-inherit border border-slate-200 py-2 border-t-0 lg:border-r-0 font-extralight\">
            4.168 Pengguna Terdaftar
          </div>
          <div class=\"pt-5 font-thin text-sm border-inherit border border-slate-200 py-2 border-t-0 lg:border-r-0\">
            <ul class=\"leading-loose\">
              <li><strong>1X RESOURCE POWER</strong></li>
              <li><span class=\"font-bold\">Unlimited</span> Disk Space</li>
              <li><span class=\"font-bold\">Unlimited</span> Bandwidth</li>
              <li><span class=\"font-bold\">Unlimited</span> Database</li>
              <li><span class=\"font-bold\">Unlimited</span> POP3 email</li>
              <li><span class=\"font-bold\">10</span> Addon Domains</li>
              <li><span class=\"font-bold\">Instant</span> Backup</li>
              <li><span class=\"font-bold\">Domain Gratis</span> Selamanya</li>
              <li><span class=\"font-bold\">Unlimited SSL</span> Gratis Selamanya</li>
            </ul>

            <button class=\"border-2 font-bold border-black rounded-full py-2 px-5 my-6\">Pilih Sekarang</button>
          </div>
        </div>
        <div class=\" relative\">
          <div class=\"text-2xl border-inherit  bg-blue-400 border border-blue-400 py-2 text-white font-title\">Personal
          </div>
          <div class=\"border-inherit border bg-blue-400  border-blue-400 py-2 text-white\">
            <span class=\"line-through\tfont-light\">58.900</span><br />
            <span class=\"font-normal\"><sup>Rp</sup> <span class=\"text-4xl font-bold\">14</span><sup
                class=\"font-bold\">.900/ bln</sup></span>
          </div>
          <div class=\"border-inherit border-b border-blue-500 py-2 font-extralight bg-blue-500 text-white\">
            938 Pengguna Terdaftar
          </div>
          <div class=\"pt-5 font-thin text-sm bg-white border-inherit border border-blue-400\">
            <ul class=\"leading-loose\">
              <li><strong>3X RESOURCE POWER</strong></li>
              <li><span class=\"font-bold\">Unlimited</span> Disk Space</li>
              <li><span class=\"font-bold\">Unlimited</span> Bandwidth</li>
              <li><span class=\"font-bold\">Unlimited</span> Database</li>
              <li><span class=\"font-bold\">Unlimited</span> POP3 email</li>
              <li><span class=\"font-bold\">10</span> Addon Domains</li>
              <li><span class=\"font-bold\">Magic Auto</span> Backup & Restore</li>
              <li><span class=\"font-bold\">Domain Gratis</span> Selamanya</li>
              <li><span class=\"font-bold\">Unlimited SSL</span> Gratis Selamanya</li>
              <li><span class=\"font-bold\">Private</span> Name Server</li>
              <li><span class=\"font-bold\">Prioritas</span> Layanan Support</li>
              <li><span class=\"font-bold\">SpamExpert</span> Pro Mail Protection</li>
            </ul>

            <button class=\"border-0 text-white font-bold border-black rounded-full py-2 px-5 my-6 bg-blue-500\">Pilih
              Sekarang</button>
          </div>
          <div class=\"ribbon ribbon-top-left\"><span>&nbsp;&nbsp;&nbsp; Best Seler!</span></div>
        </div>
        <div class=\" border-inherit border border-slate-200\">
          <div class=\"text-2xl border-inherit border-b border-slate-200 py-2 font-extrabold font-title\">Bisnis</div>
          <div class=\"border-inherit border-b border-slate-200 py-2\">
            <span class=\"line-through\tfont-light\">19.000</span><br />
            <span class=\"font-normal\"><sup>Rp</sup> <span class=\"text-4xl font-bold\">14</span><sup
                class=\"font-bold\">.900/ bln</sup></span>
          </div>
          <div class=\"border-inherit border-b border-slate-200 py-2  font-extralight\">
            938 Pengguna Terdaftar
          </div>
          <div class=\"pt-5 font-thin text-sm\">
            <ul class=\"leading-loose\">
              <li><strong>3X RESOURCE POWER</strong></li>
              <li><span class=\"font-bold\">Unlimited</span> Disk Space</li>
              <li><span class=\"font-bold\">Unlimited</span> Bandwidth</li>
              <li><span class=\"font-bold\">Unlimited</span> Database</li>
              <li><span class=\"font-bold\">Unlimited</span> POP3 email</li>
              <li><span class=\"font-bold\">10</span> Addon Domains</li>
              <li><span class=\"font-bold\">Magic Auto</span> Backup & Restore</li>
              <li><span class=\"font-bold\">Domain Gratis</span> Selamanya</li>
              <li><span class=\"font-bold\">Unlimited SSL</span> Gratis Selamanya</li>
              <li><span class=\"font-bold\">Private</span> Name Server</li>
              <li><span class=\"font-bold\">Prioritas</span> Layanan Support</li>
              <li><span class=\"font-bold text-blue-500\">
                  <i class=\"fa fa-star\"></i>
                  <i class=\"fa fa-star\"></i>
                  <i class=\"fa fa-star\"></i>
                  <i class=\"fa fa-star\"></i>
                  <i class=\"fa fa-star\"></i>
              </li>
              <li><span class=\"font-bold\">SpamExpert</span> Pro Mail Protection</li>
            </ul>

            <button class=\"border-2 font-bold border-black rounded-full py-2 px-5 my-6\">Diskon 40%</button>
          </div>
        </div>
      </div>
    </section>

    <section class=\"lg:max-w-screen-lg w-full mx-auto mt-10 sparator_bottom_center pb-8 relative\">
      <h2 class=\"text-center text-2xl font-light font-title\">Powerful dengan limit PHP yang Lebih Besar</h2>
      <div class=\"grid grid-cols-1 gap-y-5 md:grid-cols-2 gap-x-10 mx-auto mt-5 text-xs md:px-52\">
        <div>
          <div class=\"border flex-row flex p-2\">
            <div class=\"basis-1/12\"><i class=\"fa text-green-600 fa-check-circle left\"></i></div>
            <div class=\"basis-11/12 text-center\"><span>execution time 300s</span></div>
          </div>
          <div class=\"border-0 bg-gray-100 flex-row flex p-2\">
            <div class=\"basis-1/12\"><i class=\"fa text-green-600 fa-check-circle left\"></i></div>
            <div class=\"basis-11/12 text-center\"><span>execution time 300s</span></div>
          </div>
          <div class=\"border flex-row flex p-2\">
            <div class=\"basis-1/12\"><i class=\"fa text-green-600 fa-check-circle left\"></i></div>
            <div class=\"basis-11/12 text-center\"><span>execution time 300s</span></div>
          </div>
        </div>
        <div>
          <div class=\"border flex-row flex p-2\">
            <div class=\"basis-1/12\"><i class=\"fa text-green-600 fa-check-circle left\"></i></div>
            <div class=\"basis-11/12 text-center\"><span>post max size 128 MB</span></div>
          </div>
          <div class=\"border-0 bg-gray-100 flex-row flex p-2\">
            <div class=\"basis-1/12\"><i class=\"fa text-green-600 fa-check-circle left\"></i></div>
            <div class=\"basis-11/12 text-center\"><span>upload max file size 128 MB</span></div>
          </div>
          <div class=\"border flex-row flex p-2\">
            <div class=\"basis-1/12\"><i class=\"fa text-green-600 fa-check-circle left\"></i></div>
            <div class=\"basis-11/12 text-center\"><span>max input vars 2500</span></div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"lg:max-w-screen-lg mx-auto mt-10 sparator_bottom_center pb-8 relative\">
      <h2 class=\"text-center text-2xl font-light font-title\">Semua Paket Hosting Sudah Termasuk</h2>
      <div class=\"grid grid-cols-2 md:grid-cols-3 mx-auto mt-5 text-sm text-center gap-y-6\">
        <div class=\"\">
          <img src=\"assets/svg/icon PHP Hosting_PHP Semua Versi.svg\" class=\"w-2/12 place-content-center mx-auto\" />
          <span class=\"font-extrabold\">PHP Semua Versi</span><br />
          <span class=\"font-thin text-xs\">Pilih mulai dari versi PHP 5.3 s/d PHP 7.<br />
            Ubah sesuka Anda!
          </span>
        </div>
        <div class=\"\">
          <img src=\"assets/svg/icon PHP Hosting_My SQL.svg\" class=\"w-2/12 place-content-center mx-auto\" />
          <span class=\"font-extrabold\">MySQL Versi 5.6</span><br />
          <span class=\"font-thin text-xs\">Nikmati MySQL versi terbaru, tercepat dan<br />kaya akan fitur.</span>
        </div>
        <div class=\"\">
          <img src=\"assets/svg/icon PHP Hosting_CPanel.svg\" class=\"w-2/12 place-content-center mx-auto\" />
          <span class=\"font-extrabold\">Panel Hosting cPanel</span><br />
          <span class=\"font-thin text-xs\">Kelola website dengan panel canggih yang <br />familiar di hati Anda</span>
        </div>
        <div class=\"\">
          <img src=\"assets/svg/icon PHP Hosting_garansi uptime.svg\" class=\"w-2/12 place-content-center mx-auto\" />
          <span class=\"font-extrabold\">Garansi Uptime 99%</span><br />
          <span class=\"font-thin text-xs\">Data center yang mendukung kelangsungan<br />website Anda 24/7.
          </span>
        </div>
        <div class=\"\">
          <img src=\"assets/svg/icon PHP Hosting_InnoDB.svg\" class=\"w-2/12 place-content-center mx-auto\" />
          <span class=\"font-extrabold\">Database InnoDB Unlimited</span><br />
          <span class=\"font-thin text-xs\">Jumlah dan ukuran database yang tumbuh<br />sesuai kebutuhan anda.</span>
        </div>
        <div class=\"\">
          <img src=\"assets/svg/icon PHP Hosting_My SQL remote.svg\" class=\"w-2/12 place-content-center mx-auto\" />
          <span class=\"font-extrabold\">Wildcard Remote MySQL</span><br />
          <span class=\"font-thin text-xs\">Mendukung sd 25 mx_user_connections<br />dan 100 max_connection</span>
        </div>
      </div>
    </section>

    <section class=\"max-w-screen-lg mx-auto py-10\">
      <h2 class=\"text-center text-2xl font-light mb-5 font-title\">Mendukung Penuh Framework Laravel</h2>
      <div class=\"grid grid-cols-1 gap-y-8 md:grid-cols-2 px-6\">
        <div class=\"leading-loose text-sm\">
          <p class=\"pt-3 font-light\">
            Tak perlu menggunakan decicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung
            penuh framework favorit Anda
          <ul class=\"font-light\">
            <li><i class=\"fa fa-check-circle text-green-700\"></i> Install Laravel <strong>1 klik</strong> dengan
              Softaculous Installer</li>
            <li><i class=\"fa fa-check-circle text-green-700\"></i> Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring,
                json</strong> dan <strong>fileinfo</strong></li>
            <li><i class=\"fa fa-check-circle text-green-700\"></i> Tersedia <strong>Composer</strong> dan
              <strong>SSH</strong> untuk menginstal packages pilihan Anda.
            </li>
          </ul>
          <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
          </p>
          <br />
          <a class=\"px-5 py-3 rounded-full bg-blue-400 text-white\">Pilih Hosting anda</a>
        </div>
        <div class=\"text-right\">
          <img src=\"assets/svg/illustration banner support laravel hosting.svg\" class=\"max-h-max\" />
        </div>
      </div>
    </section>

    <hr class=\"border-b-gray-400 border-b-inherit \" />
    <section class=\"lg:max-w-screen-lg mx-auto py-10 px-6 font-light\">
      <h2 class=\"text-center text-2xl mb-5\">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
      <div class=\"grid grid-flow-row-dense leading-loose grid-cols-4 text-sm items-center\">
        <div class=\"item-center\">IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
        <div>IcePHP</div>
      </div>
      <div class=\"mt-8 text-center\">
        <a class=\"px-5 py-3 rounded-full border border-gray-900 font-extrabold\">Pilih Hosting anda</a>
      </div>
    </section>

    <section class=\"lg:max-w-screen-lg mx-auto pt-10\">
      <div class=\"w-full grid gap-x-8 gap-y-10 grid-cols-1 md:grid-cols-2 px-6\">
        <div class=\"leading-loose text-sm\">
          <h2 class=\"text-2xl font-light mb-2 font-light\">Linux Hosting yang Stabil dengan Teknologi LVE</h2>
          <p class=\"pt-3 font-light\">
            Tak perlu menggunakan decicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung
            penuh framework favorit Anda
          </p>
          <br />
          <a class=\"px-5 py-3 rounded-full bg-blue-400 text-white\">Pilih Hosting anda</a>
        </div>
        <div class=\"text-right\">
          <img src=\"assets/images/Image support.png\" class=\"max-h-max\" />
        </div>
      </div>
    </section>

    <section class=\"mx-auto py-3 bg-gray-100\">
      <div class=\"lg:max-w-screen-lg mx-auto px-6\">
        <div class=\"grid grid-cols-2\">
          <div class=\"leading-loose text-sm\">
            Bagikan jika anda menyukai halaman ini.
          </div>
          <div class=\"leading-loose text-sm flex flex-row pl-10 lg:pl-32\">
            <div class=\"basis-4/12\">
              <i class=\"fa fa-facebook\"></i> 800K
            </div>
            <div class=\"basis-4/12\">
              <i class=\"fa fa-twitter\"></i> 800K
            </div>
            <div class=\"basis-4/12\">
              <i class=\"fa fa-google\"></i> 800K
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"mx-auto py-6 bg-blue-400\">
      <div class=\"max-w-screen-lg mx-auto text-3xl text-white px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-4 sm:text-center items-center\">
          <div class=\"leading-loose font-thin md:col-span-3\">
            Perlu <strong>BANTUAN?</strong> Hubungi Kami : <strong>0274-5305505</strong>
          </div>
          <div class=\"leading-loose lg:border-l border-inherit lg:border-gray-300 pl-6 sm:item-center\">
            <a class=\"py-2 md:px-8 w-full text-sm border rounded-full\"><i class=\"fa fa-comments\"></i> Live Chat</a>
          </div>
        </div>
      </div>
    </section>

    <section class=\"mx-auto py-6 bg-stone-800 font-light\">
      <div class=\"lg:max-w-screen-lg mx-auto text-stone-500 px-6\">
        <div class=\"grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 text-sm gap-y-6 text-center md:text-left\">
          <div class=\"leading-loose\">
            <div class=\"lg:mb-6 font-extrabold\">HUBUNGI KAMI</div>
            <div class=\"text-stone-400\">
              Telp: 021-50861682<br />
              WA: 0895395186038<br />
              Senin - Minggu<br />
              24 Jam Non Stop<br /><br />
              Jl. Selokan Mataram Monjali<br />
              Karangjati MT I/304<br />
              RT 019 RW 042<br />
              Sinduadi, Mlati, Sleman<br />
              Daerah Istimewa Yogyakarta<br />
              55284
            </div>
          </div>
          <div class=\"leading-loose\">
            <div class=\"lg:mb-6 font-extrabold\">LAYANAN</div>
            <div class=\"text-stone-400\">
              Domain<br />
              Shared Hosting<br />
              Cloud VPS Hosting<br />
              Transfer Hosting<br />
              Web Builder<br />
              Keamanan SSL / HTTPS<br />
              Jasa Pembuatan Website<br />
              Program Afiliasi<br />
              Whois<br />
            </div>
          </div>
          <div class=\"leading-loose\">
            <div class=\"lg:mb-6 font-extrabold\">SERVICE HOSTING</div>
            <div class=\"text-stone-400\">
              Hosting Murah<br />
              Hosting Indonesia<br />
              Hosting Singapore SG<br />
              Hosting WordPress<br />
              Email Hosting<br />
              Niagahoster Partner<br />
              Web Hosting Unlimited<br />
            </div>
          </div>
          <div class=\"lg:leading-loose\">
            <div class=\"mb-6 font-extrabold\">TUTORIAL</div>
            <div class=\"text-stone-400\">
              Ebook Gratis<br />
              Knowledgebase<br />
              Blog<br />
              Cara Pembayaran<br />
            </div>
          </div>
          <div class=\"lg:leading-loose\">
            <div class=\"mb-6 font-extrabold\">TENTANG KAMI</div>
            <div class=\"text-stone-400\">
              Penawaran & Promo Spesial<br />
              Niaga Poin<br />
              Karir<br />
              Kontak Kami<br />
            </div>
          </div>
          <div class=\"lg:leading-loose\">
            <div class=\"mb-6 font-extrabold\">KENAPA PILIH NIAGA HOSTER</div>
            <div class=\"text-stone-400\">
              Datacenter Hosting Terbaik<br />
              Domain Gratis<br />
              Bagi-bagi Domain Gratis<br />
              Bagi-bagi Hosting Gratis<br />
              Review Pelanggan<br />
            </div>
          </div>
          <div class=\"leading-loose\">
            <div class=\"mb-6 font-extrabold\">NEWS LETTER</div>
            <div class=\"text-stone-400 text-xs\">
              <div class=\"py-2 rounded-full justify-between bg-white flex flex-row\">
                <div class=\"basis-6/12\"><input type=\"text\" class=\"border-0 w-full ml-6 p-0\" /></div>
                <div class=\"basis-4/12 mr-1\">
                  <button class=\"bg-blue-500 text-white py-2 px-2 rounded-full items-center\">Berlangganan</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"leading-loose\">
            <div class=\"mb-6 font-extrabold\"></div>
            <div class=\"text-stone-400 grid grid-cols-3\">
              <div class=\"leading-loose ml-10\">
                <a
                  class=\"flex rounded-full border w-14 h-14 font-extrabold text-3xl items-center justify-center text-center\">
                  <i class=\"fa fa-facebook\"></i>
                </a>
              </div>

              <div class=\"leading-loose ml-10\">
                <a
                  class=\"flex rounded-full border w-14 h-14 font-extrabold text-3xl items-center justify-center text-center\">
                  <i class=\"fa fa-twitter\"></i>
                </a>
              </div>
              <div class=\"leading-loose ml-10\">
                <a
                  class=\"flex rounded-full border w-14 h-14 font-extrabold text-3xl items-center justify-center text-center\">
                  <i class=\"fa fa-google\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"lg:max-w-screen-lg mx-auto text-stone-500 px-6\">
        <div class=\"lg:mb-6 font-extrabold\">PEMBAYARAN</div>
        <div class=\"grid grid-cols-4 gap-2 md:grid-cols-12\">
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/logo-bni-bordered.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/logo-bni-bordered.svg\" alt=\"bank bni\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/logo-bca-bordered.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/logo-bca-bordered.svg\" alt=\"bank bca\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/bri.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/bri.svg\" alt=\"bank bri\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/mandiriclickpay.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/mandiriclickpay.svg\"
              alt=\"mandiri clickpay\" class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/permatabank.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/permatabank.svg\" alt=\"bank permata\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/atmbersama.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/atmbersama.svg\" alt=\"atm bersama\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/prima.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/prima.svg\" alt=\"prima\" class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/alto.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/alto.svg\" alt=\"alto\" class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/visa.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/visa.svg\" alt=\"visa\" class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/mastercard.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/mastercard.svg\" alt=\"master card\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/indomaret.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/indomaret.svg\" alt=\"indomaret\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/paypal.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/paypal.svg\" alt=\"paypal\"
              class=\"bank-logo\">
          </div>
          <div>
            <img src=\"https://www.niagahoster.co.id/assets/images/new_design/logo-gopay.svg\"
              data-src=\"https://www.niagahoster.co.id/assets/images/new_design/logo-gopay.svg\" alt=\"paypal\"
              class=\"bank-logo\">
          </div>
        </div>
        <div class=\"mt-2 font-thin\">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</div>
      </div>
    </section>

    <section class=\"mx-auto py-6 bg-stone-800 font-light\">
      <div class=\"lg:max-w-screen-lg mx-auto text-stone-500 px-6 text-sm text-center\">
        <hr class=\"border-t-stone-700 border-b-inherit mb-2\" />
        Copyright ??2022 Niagahoster | Hosting powered by PHP 8.1, CloudLinux, CloudFlare, Imunify and DC DCI-Indonesia
        Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technologySyarat dan Ketentuan |
        Kebijakan Privasi | Service Level Agreement
      </div>
    </section>
  </div>

  <script src=\"https://code.jquery.com/jquery-3.6.1.slim.min.js\"
    integrity=\"sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=\" crossorigin=\"anonymous\"></script>
  <script>
    \$(document).ready(function(){
      \$('#hamburger_button').click(function(){
        var css = \$('#nav').hasClass('hidden');
        if(css){
          \$('#nav').removeClass('hidden');
          \$('#nav').addClass('transition');
          \$('#nav').addClass('ease-in-out');
        }else{
          \$('#nav').addClass('hidden');
        }
      })
    })
  </script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/Users/macbook/www/niagahoster/site/src/index.html");
    }
}
