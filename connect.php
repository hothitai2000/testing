<?php
function DienTichHinhChuNhat($d, $r)
{
    return $d * $r;
}
use PHPUnit\Framework\TestCase;

class connect extends TestCase
{
    public function testDTHCN()
    {   
        $this->assertEquals(9, DienTichHinhChuNhat(2, 2));
        $this->assertEquals(1, DienTichHinhChuNhat(4,4));
    }
}
?>

