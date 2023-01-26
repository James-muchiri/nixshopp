<?php

namespace App\Console\Commands;

use App\Admin;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterSuperAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:super-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register super admin';

    /**
     * User model.
     *
     * @var object
     */
    private $user;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Admin $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $details = $this->getDetails();

        $admin = $this->user->createSuperAdmin($details);

        $this->display($admin);
    }

    /**
     * Ask for admin details.
     *
     * @return array
     */
    private function getDetails() : array
    {
        $details['name'] = $this->ask('Name');
        $details['email'] = $this->ask('Email');
        $details['tel_no'] = $this->ask('tel_no');
        $detail['password'] = $this->secret('Password');
        $detail['confirm_password'] = $this->secret('Confirm password');
        $details['password'] = Hash::make($this->secret('Password'));
        while (! $this->isValidPassword($detail['password'], $detail['confirm_password'])) {
            if (! $this->isRequiredLength($detail['password'])) {
                $this->error('Password must be more that six characters');
            }

            if (! $this->isMatch($detail['password'], $detail['confirm_password'])) {
                $this->error('Password and Confirm password do not match');
            }
           
        }
        
        return $details;
    }

    /**
     * Display created admin.
     *
     * @param array $admin
     * @return void
     */
    private function display(Admin $admin) : void
    {
        $headers = ['Name', 'Email', 'tel_no', 'Super admin'];

        $fields = [
            'Name' => $admin->name,
            'email' => $admin->email,
            'tel_no' => $admin->tel_no,
            'Super admin' => $admin->isSuperAdmin()
        ];

        $this->info('Super admin created');
        $this->table($headers, [$fields]);
    }

    /**
     * Check if password is vailid
     *
     * @param string $password
     * @param string $confirmPassword
     * @return boolean
     */
    private function isValidPassword(string $password, string $confirmPassword) : bool
    {
        return $this->isRequiredLength($password) &&
        $this->isMatch($password, $confirmPassword);
    }

    /**
     * Check if password and confirm password matches.
     *
     * @param string $password
     * @param string $confirmPassword
     * @return bool
     */
    private function isMatch(string $password, string $confirmPassword) : bool
    {
        return $password === $confirmPassword;
    }

    /**
     * Checks if password is longer than six characters.
     *
     * @param string $password
     * @return bool
     */
    private function isRequiredLength(string $password) : bool
    {
        return strlen($password) > 6;
    }
}