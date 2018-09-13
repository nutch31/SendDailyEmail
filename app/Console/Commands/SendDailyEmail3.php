<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendDailyEmail3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SendDailyEmail3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Daily Email Every Monday 10.00 AM';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://message.heroleads.co.th/SendDailyEmail/public/index.php/api/sendEmail3");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);

        $data = array(
            'fileUrl' => 'https://docs.google.com/spreadsheets/d/1g7PIElxfvQ6dI5PMMqZ8H7qJTQX1jAgq6JE5DMzyrLI/edit#gid=771195729',
            'mimeType' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'email_from' => 'admin.th@heroleads.com',
            'email[0]' => 'misumi.th@heroleads.com',
            'email[1]' => 'misumi.sem@misumi.co.th',
            'email[2]' => 'nut@heroleads.com'
        );

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
    }
}
