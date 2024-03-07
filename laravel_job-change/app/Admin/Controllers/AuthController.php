<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AuthController as BaseAuthController;

class AuthController extends BaseAuthController
{
  /**
   * Get the post login redirect path.
   *
   * @return string
   */
  protected function redirectTo()
  {
    if (Admin::user()->isRole('users')) { // ここで制御
      return config('admin.route.prefix') . '/jobhunting/home';
    }
    // 以下は Encore\Admin\Controllers\AuthController の redirectPath() からコピペ
    return property_exists($this, 'redirectTo') ? $this->redirectTo : config('admin.route.prefix');
  }
}
