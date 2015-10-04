<?php

namespace App\Console\Commands;

use App\User as UserModel;
use Illuminate\Console\Command;


class ShowUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:show {gender? : The gender (male/female) of the users}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all registered users.';

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
        $fields = ['id', 'first_name', 'last_name', 'gender', 'email'];
        
        $gender = $this->argument('gender');
        
        if (is_null($gender)) {
            $users = UserModel::all($fields);    
        }
        elseif (in_array($gender, ['male', 'female'])) {
            $users = UserModel::where('gender', $gender)->select($fields)->get();
        }
        else {
            return $this->error('Received invalid argument: ' . $gender);
        }
        
        $this->table(['id', 'First Name', 'Last Name', 'Gender', 'Email'], $users);
    }
}
