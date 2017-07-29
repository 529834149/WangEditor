<?php

/*
 * This file is part of the seaony/wangeditor.
 *
 * (c) seaony <seaony@seaony.cn>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Seaony\WangEditor;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class WangEditorController extends Controller
{

    /**
     * Processing upload files
     *
     * @param Request $request
     * @return string
     */
    public function serve(Request $request)
    {
        if (
            $request->hasFile('ChooseFile')
            && $request->file('ChooseFile')->isValid()
        ) {
            $storage = Storage::disk(
                config('wangeditor.upload.disk','public')
            );
            return $storage->url(
                $storage->put(
                    config('wangeditor.upload.path','uploads/images'), $request->file('ChooseFile')
                )
            );
        }
    }

}