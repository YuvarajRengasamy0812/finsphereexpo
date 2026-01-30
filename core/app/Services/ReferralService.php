<?php
namespace App\Services;

use App\Models\User;
use App\Models\ReferralCommission;
use App\Models\Wallet;
use App\Models\WalletTransaction;

class ReferralService
{
    public function distributeRegistrationCommission($newUserId, $newuserName, $baseAmount)
    {
        $percentages = [
			1 => 10,
			2 => 5,
			3 => 2.5,
		];

		$level = 1;
		$referrer = User::find($newUserId)->referrer;

		while ($referrer && $level <= 3) {
			$percent = $percentages[$level];
			$commissionAmount = ($baseAmount * $percent) / 100;

			$description = "Level $level Referral Bonus from {$newuserName}";
			


			$referrer = $referrer->referrer;
			$level++;
		}
    }
}
