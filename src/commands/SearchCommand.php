<?php

/**
 * Sample Search Command
 */
class SearchCommand extends BaseCommand
{
    protected function exec()
    {
        $this->LF();
        $this->info("Info Message");
        $this->LF();
        $this->error("Error Message!");
        $this->LF();
        $this->comment("Comment Message");
    }
}
