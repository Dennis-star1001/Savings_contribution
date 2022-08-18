<?php


class Contribution extends Database
{
    public $contributors_id;
    public $date_of_contribution;
    public $amount;
    public $payment_method;

    public $result = '';
    public $contributors_table = "contributions";

    // public function innerJoinLookUp($tableA, $field = "*", $tableB, $condition = "", $column = "" ){
    //     $this->sql("SELECT $field FROM $tableA INNER JOIN  $tableB ON $condition");
    public function contributionInfo($condition = "", $field = "*", $column = "")
    { 
        return $this->lookUp($this->contributors_table, $field, $condition, $column);
    }

    public function singleContributionInfo($id)
    {
        $this->result = $this->contributionInfo("id = '$id'");
        $this->contributors_id = $this->result['contributors_id'];
        $this->date_of_contribution = $this->result['date_of_contribution'];
        $this->amount = $this->result['amount'];
        $this->payment_method = $this->result['payment_method'];
    }
    public function countContributionRow($condition)
    {
        return $this->countRows($this->contributors_table, "*", $condition);
    }
  
    public function isExist($condition)
    {
        $rlt = $this->countContributionRow($condition);
        if ($rlt > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function validationForContribution()
    {
        if (Fun::checkEmptyInput([$this->contributors_id,$this->date_of_contribution, $this->amount, $this->payment_method])) {
            Fun::redirect("../../Views/contribution.php", "err", "None of this fields must be empty");
            exit;
        }

        // if ($this->isExist($this->date_of_contribution)) {
        //     Fun::redirect("../../Views/contribution.php", "err", "Date of contribution already exist");
        //     exit;

        // }
    Fun::redirect("../../Views/contribution.php", "succ", "Saved successfully");
             
    }


 

    public function processContribution($contributors_id, $date_of_contribution, $amount, $payment_method)
    {

        $this->contributors_id = $contributors_id; 
        $this->date_of_contribution =  $date_of_contribution; 
        $this->amount =  $amount;
        $this->payment_method = $payment_method;
        $this->validationForContribution();
        $this->saveContributionInfo();
    }

    public function  saveContributionInfo()
    {
       
        return $this->save($this->contributors_table, "contributors_id = '$this->contributors_id', date_of_contribution = '$this->date_of_contribution', amount = '$this->amount', payment_method = '$this->payment_method'");
    }
}
