<?php

namespace Modules\Backend\Controllers\Admin\Backend;

use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class DependencyUploadController extends UploadController {
    /**
     * Handles the file upload.
     *
     * @param FileReceiver $receiver
     *
     * @throws UploadMissingFileException
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadFile(FileReceiver $receiver) {
        // check if the upload is success, throw exception or return response you need
        if (false === $receiver->isUploaded()) {
            throw new UploadMissingFileException();
        }
        // receive the file
        $save = $receiver->receive();

        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()) {
            // save the file and return any response you need
            return $this->saveFile($save->getFile());
        }

        // we are in chunk mode, lets send the current progress
        /** @var AbstractHandler $handler */
        $handler = $save->handler();

        return response()->json([
            'done' => $handler->getPercentageDone(),
        ]);
    }
}
