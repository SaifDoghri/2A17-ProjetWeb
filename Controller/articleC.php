<?PHP
	include $_SERVER['DOCUMENT_ROOT']."/Config.php";
	require_once $_SERVER['DOCUMENT_ROOT'].'/Model/article.php';

	class articleC {
		
		function ajouterarticle($article){
			$sql="INSERT INTO article (titre, image, likes, text, auteur, nombresdepartages) 
			VALUES (:titre,:image,:likes, :text,:auteur,:nombresdepartages)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'titre' => $article->gettitre(),
					'image' => "../assets/img/".$article->getimage(),
					'likes' => $article->getlikes(),
					'text' => $article->gettext(),
					'auteur' =>$article->getauteur(),
					'nombresdepartages' =>$article->getnombresdepartages(),
					
				]);			
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage() );
			}			
		}
		
		function afficherarticle(){
			
			$sql="SELECT * FROM article";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerarticle($id){
			$sql="DELETE FROM article WHERE idarticle= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierarticle($article, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE article SET  
						image = :image,
						text = :text,
						likes = :likes,
					 	auteur = :auteur,
						nombresdepartages= :nombresdepartages,
						titre = :titre,
					WHERE idarticle = :id'
				);
				$query->execute([
					'image' => $article->getimage(),
					'text' => $article->gettext(),
					'likes' => $article->getlikes(),
					'auteur' => $article->getauteur(),
					'nombresdepartages' => $article->getnombresdepartages(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererarticle($id){
			$sql="SELECT * from article where idarticle=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
			
			
		
		
	}

?>