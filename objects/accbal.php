<?php



class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
      $this->balance += $amount;
      return $this;
		}
	}

	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return $this;
		}
                return false;

	}
}

$ekeopreAccBal = new BankAccount();

$ekeopreAccBal->balance = 100000000;


$ekeopreAccBal->withdraw(2000)->withdraw(2000)->withdraw(2000);
echo $ekeopreAccBal->balance;
 var_dump($ekeopreAccBal);
