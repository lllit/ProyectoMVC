<?php



class Producto
{
    private $pdo;
    private $pro_id;
    private $pro_nom;
    private $pro_mar;
    private $pro_cos;
    private $pro_pre;
    private $pro_cant;
    private $pro_img;


    public function __construct()
    {
        $this->pdo = BaseDatos::Conectar();
    }

    public function getPro_id(): ?int
    {
        return $this->pro_id;
    }
    public function setPro_id(int $id)
    {
        $this->pro_id = $id;
    }

    public function getPro_nom(): ?string
    {
        return $this->pro_nom;
    }
    public function setPro_nom(string $nom)
    {
        $this->pro_nom = $nom;
    }
    public function getPro_mar(): ?string
    {
        return $this->pro_mar;
    }

    public function setPro_mar(string $mar)
    {
        $this->pro_mar = $mar;
    }
    public function getPro_cos(): ?float
    {
        return $this->pro_cos;
    }
    public function setPro_cos(float $cos)
    {
        $this->pro_cos = $cos;
    }
    public function getPro_pre(): ?string
    {
        return $this->pro_pre;
    }
    public function setPro_pre(string $pre)
    {
        $this->pro_pre = $pre;
    }

    public function getPro_cant(): ?int
    {
        return $this->pro_cant;
    }
    public function setPro_cant(int $cant)
    {
        $this->pro_cant = $cant;
    }

    public function getPro_img(): ?string
    {
        return $this->pro_img;
    }
    public function setPro_img(string $img)
    {
        $this->pro_img = $img;
    }

    public function Cantidad()
    {
        try {
            $consulta = $this->pdo->prepare("select sum(pro_cant) as Cantidad from productos;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
            
        }
    }
    public function Listar()
    {
        try {
            $consulta = $this->pdo->prepare("select * from productos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());

        }
    }
}
