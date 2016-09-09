<?php

namespace SitePoint\StaticReview\PHP;

use StaticReview\File\FileInterface;
use StaticReview\Reporter\ReporterInterface;
use StaticReview\Review\AbstractReview;

class VarDumpReview extends AbstractReview
{
    public function canReview(FileInterface $file)
    {
        $extension = $file->getExtension();
        return ($extension === 'php' || $extension === 'phtml');
    }

    public function review(ReporterInterface $reporter, FileInterface $file)
    {
        $cmd = sprintf('grep --fixed-strings --ignore-case --quiet "var_dump" %s', $file->getFullPath());
        $process = $this->getProcess($cmd);
        $process->run();

        if ($process->isSuccessful()) {
            $message = 'A call to `var_dump()` was found';
            $reporter->error($message, $this, $file);
        }
    }
}
