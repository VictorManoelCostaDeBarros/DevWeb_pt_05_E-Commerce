<?php
	namespace models;

	class homeModel{
		public static function getLojaItens() {
			$sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque`");
			$sql->execute();
			return $sql->fetchALl();
		}

		public static function getTotalItensCarrinho() {
			if(isset($_SESSION['carrinho'])){
				$amount = 0;
				foreach ($_SESSION['carrinho'] as $key => $value) {
					$amount +=$value;
				}
				return $amount;
			}else{
				return 0;
			}
		}
	}
?>