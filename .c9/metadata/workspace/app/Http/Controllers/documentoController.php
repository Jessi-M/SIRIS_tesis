{"filter":false,"title":"documentoController.php","tooltip":"/app/Http/Controllers/documentoController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":232,"column":8},"end":{"row":232,"column":9},"action":"insert","lines":["$"],"id":166}],[{"start":{"row":232,"column":15},"end":{"row":232,"column":25},"action":"remove","lines":["get_tf_idf"],"id":167},{"start":{"row":232,"column":15},"end":{"row":232,"column":16},"action":"insert","lines":["g"]}],[{"start":{"row":232,"column":16},"end":{"row":232,"column":17},"action":"insert","lines":["e"],"id":168}],[{"start":{"row":232,"column":17},"end":{"row":232,"column":18},"action":"insert","lines":["t"],"id":169}],[{"start":{"row":232,"column":15},"end":{"row":232,"column":18},"action":"remove","lines":["get"],"id":170},{"start":{"row":232,"column":15},"end":{"row":232,"column":25},"action":"insert","lines":["get_tf_idf"]}],[{"start":{"row":232,"column":15},"end":{"row":232,"column":25},"action":"remove","lines":["get_tf_idf"],"id":171},{"start":{"row":232,"column":15},"end":{"row":232,"column":25},"action":"insert","lines":["get_tf_idf"]}],[{"start":{"row":232,"column":15},"end":{"row":232,"column":25},"action":"remove","lines":["get_tf_idf"],"id":173},{"start":{"row":232,"column":15},"end":{"row":232,"column":30},"action":"insert","lines":["getDocumentosDB"]}],[{"start":{"row":232,"column":33},"end":{"row":233,"column":0},"action":"insert","lines":["",""],"id":174},{"start":{"row":233,"column":0},"end":{"row":233,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":233,"column":0},"end":{"row":234,"column":0},"action":"insert","lines":["        $this->getDocumentosDB();",""],"id":175}],[{"start":{"row":233,"column":15},"end":{"row":233,"column":30},"action":"remove","lines":["getDocumentosDB"],"id":176},{"start":{"row":233,"column":15},"end":{"row":233,"column":33},"action":"insert","lines":["insertMatrizkmeans"]}],[{"start":{"row":680,"column":48},"end":{"row":680,"column":49},"action":"remove","lines":["3"],"id":177}],[{"start":{"row":680,"column":48},"end":{"row":680,"column":49},"action":"insert","lines":["$"],"id":178}],[{"start":{"row":680,"column":49},"end":{"row":680,"column":50},"action":"insert","lines":["k"],"id":179}],[{"start":{"row":647,"column":39},"end":{"row":647,"column":40},"action":"insert","lines":["$"],"id":180}],[{"start":{"row":647,"column":40},"end":{"row":647,"column":41},"action":"insert","lines":["k"],"id":181}],[{"start":{"row":233,"column":34},"end":{"row":233,"column":35},"action":"insert","lines":["r"],"id":182}],[{"start":{"row":233,"column":35},"end":{"row":233,"column":36},"action":"insert","lines":["e"],"id":183}],[{"start":{"row":233,"column":36},"end":{"row":233,"column":37},"action":"insert","lines":["q"],"id":184}],[{"start":{"row":233,"column":37},"end":{"row":233,"column":38},"action":"insert","lines":["u"],"id":185}],[{"start":{"row":233,"column":38},"end":{"row":233,"column":39},"action":"insert","lines":["e"],"id":186}],[{"start":{"row":233,"column":39},"end":{"row":233,"column":40},"action":"insert","lines":["s"],"id":187}],[{"start":{"row":233,"column":40},"end":{"row":233,"column":41},"action":"insert","lines":["t"],"id":188}],[{"start":{"row":233,"column":41},"end":{"row":233,"column":42},"action":"insert","lines":["-"],"id":189}],[{"start":{"row":233,"column":42},"end":{"row":233,"column":43},"action":"insert","lines":[">"],"id":190}],[{"start":{"row":233,"column":43},"end":{"row":233,"column":44},"action":"insert","lines":["i"],"id":191}],[{"start":{"row":233,"column":44},"end":{"row":233,"column":45},"action":"insert","lines":["n"],"id":192}],[{"start":{"row":233,"column":45},"end":{"row":233,"column":46},"action":"insert","lines":["p"],"id":193}],[{"start":{"row":233,"column":46},"end":{"row":233,"column":47},"action":"insert","lines":["u"],"id":194}],[{"start":{"row":233,"column":47},"end":{"row":233,"column":48},"action":"insert","lines":["t"],"id":195}],[{"start":{"row":233,"column":48},"end":{"row":233,"column":50},"action":"insert","lines":["()"],"id":196}],[{"start":{"row":233,"column":49},"end":{"row":233,"column":51},"action":"insert","lines":["''"],"id":197}],[{"start":{"row":233,"column":50},"end":{"row":233,"column":51},"action":"insert","lines":["k"],"id":198}],[{"start":{"row":233,"column":34},"end":{"row":233,"column":35},"action":"insert","lines":["$"],"id":199}],[{"start":{"row":173,"column":49},"end":{"row":173,"column":51},"action":"insert","lines":["*/"],"id":200},{"start":{"row":170,"column":6},"end":{"row":170,"column":8},"action":"insert","lines":["/*"]}],[{"start":{"row":839,"column":12},"end":{"row":839,"column":13},"action":"insert","lines":["/"],"id":201}],[{"start":{"row":839,"column":13},"end":{"row":839,"column":14},"action":"insert","lines":["/"],"id":202}],[{"start":{"row":865,"column":4},"end":{"row":938,"column":5},"action":"remove","lines":["//PROCESAMIENTO DE LA BUSQUEDA","    public function filtrar(Request $request){","        $doc=(($request->input('string')));","     ","        $documento[]=$doc;","        $query=$this->tf_idfBusqueda($documento);","        $count=dB::table('termino')->count();","        $centroides=array();","        for($i=0;$i<3;$i++){","           $centroides[$i] = DB::table('centroides')->where('id_centroide',$i)->get();","        }","        $vectorBusqueda=array();","        for($o=1;$o<=$count;$o++){","            $vectorBusqueda[$o]=0;","        }","        foreach($query as $id=>$value){","            $vectorBusqueda[$id]=$value;","        }","        $menor=-1;","        //buscando el centroide mas similar","        foreach($centroides as $idcentroid=>$value){","            $vectorCentroide=array();","            //iniciaizo el vector para el centroide","            for($o=1;$o<=$count;$o++){","                $vectorCentroide[$o]=0;","            }","            //lleno el vector para el centroide","            foreach ($value as $idValue=>$valor) {","               $vectorCentroide[$valor->id_termino]=$valor->valor;","            }","            //dd($vectorBusqueda);","            //calculo la distancia del vector centroide yla busqueda","            $axu=$this->distanciaCentroides($vectorBusqueda,$vectorCentroide);","            //echo $axu.$value.'<br>';","            //almaceno el menor y su id de cluster","            if($axu>=$menor){","               $menor=$axu;","               $id_cluster=$idcentroid;","           }","        }","        //calcular similitud de los documentos del centroide con la busqueda","        $noticias_cluster= DB::table('documento')->select('id')->where('cluster',$id_cluster)->get();","        $cant_noticias=sizeof($noticias_cluster->all());","        //consulto tf idf de cada documento","        //dd($noticias_cluster);","        $vector_noticia=array();","        $result=array();","        foreach($noticias_cluster->all() as $idDoc=>$value){","            ","            for($o=1;$o<=$count;$o++){","                $vector_noticia[$o]=0;","            }","            $query=DB::table('tf_idt')->where('documento_id',$value->id)->get();","            foreach($query->all() as $id=>$valor){","                $vector_noticia[$valor->termino_id]=$valor->tf_idf;","            }","            ","            $result[$value->id]=$this->distanciaCentroides($vectorBusqueda, $vector_noticia);","        }","        ","       ","        arsort ($result);","      ","       $result2=array();","          $ubicaion=DB::table('ubicacion')->get();","        foreach($result as $id=>$value){","         ","          $query= DB::table('documento')->where('id',$id)->get();","          $this->verificarUbicacion($query[0],$ubicaion->all());","          $result2[]=$query;","        }","        ","       return $this->sendResponse($result2,'200');","    }"]}],[{"start":{"row":865,"column":0},"end":{"row":865,"column":4},"action":"remove","lines":["    "],"id":204}],[{"start":{"row":864,"column":5},"end":{"row":865,"column":0},"action":"remove","lines":["",""],"id":205}],[{"start":{"row":865,"column":3},"end":{"row":893,"column":5},"action":"remove","lines":[" //TF IDF BUSQUEDA","    public function tf_idfBusqueda($documento){","            $termino = db::table('termino')->pluck('nombre','id');","            $documento = $this->limpiar_palabras($documento,$termino->all());","          ","            $index = $this->make_diccionary($documento);","            $matchDocs = array();","            $docCount = count($index['docCount']);","             ","           // $docCount = count($collection);","          ","            $vector = array();","            foreach($documento as $idDoc  => $doc){","               // $terms = explode(' ', $doc);","               ","                foreach($doc as $idTerm => $term){","                    $entry = $index['dictionary'][$term];","                    $vector[$term] = ($entry['postings'][$idDoc]['tf'] * log($docCount + 1/ $entry['df']+ 1, 2));","                   ","                }","            }","             $result=array();","            foreach ($vector as $idterm=>$value) {","                $id=DB::table('termino')->where('nombre',$idterm)->value('id');","                 $result[$id]=$value;","                ","            }","           return ($result);","    }"]}],[{"start":{"row":866,"column":3},"end":{"row":890,"column":5},"action":"remove","lines":[" //DISTANCIA DE LA BUSQUEDA CON LSO CENTROIDES","    public function distanciaCentroides($vector, $centroides){","            $short = 0;","            $cluster = null;","            $key=0;","                $dist = 0;","                $total = $this->norma($vector)*$this->norma($centroides);","            ","                foreach ($vector as $idword => $word) { //p cada pos del vect doc","                    if(isset($centroides[$idword])){","                        $dist += $centroides[$idword]*$word;","                    }","                }","                if($total>0){","                    $dist = $dist/$total;","                    if($dist >= $short){","                        $short = $dist;","                        $cluster = $key;","                        $key=$key+1;","                    }","                }","               ","        //dd($dist);","        return $dist;","    }"]}],[{"start":{"row":867,"column":4},"end":{"row":872,"column":5},"action":"remove","lines":["public function getLocations(){","        $locatiosnsDB=DB::table('documento')->pluck('ubicacion');","        $result=$locatiosnsDB->toArray();","        $result=array_unique($result);","        return $this->sendResponse($result,200);","    }"],"id":208}],[{"start":{"row":868,"column":3},"end":{"row":872,"column":5},"action":"remove","lines":[" public function getDocumentosDBBusqueda(){","        $arry=DB::table('documento')->pluck('contenido','id');","        $this->get_tf_idf($arry->all()); //llamada TF IDF","        return $this->insertMatrizkmeans();","    }"],"id":209}],[{"start":{"row":869,"column":3},"end":{"row":881,"column":5},"action":"remove","lines":[" //verifica la ubicacion que ingreso el usuario","    public function verificarUbicacion($objet,$ubicaion){","        $i=0;","        $band=false;","        ","        while($i<sizeof($ubicaion) && !$band){","            if(strpos($objet->titulo, $ubicaion[0]->ubicacion)==true){","                db::table('documento')->where('id',$object->id)->update(['ubicacion'=>$ubicaion[0]->ubicacion]);","                $band=true;","            }","            $i++;","        }","    }"]}],[{"start":{"row":869,"column":2},"end":{"row":869,"column":3},"action":"remove","lines":[" "],"id":211}],[{"start":{"row":869,"column":1},"end":{"row":869,"column":2},"action":"remove","lines":[" "],"id":212}],[{"start":{"row":869,"column":0},"end":{"row":869,"column":1},"action":"remove","lines":[" "],"id":213}],[{"start":{"row":868,"column":3},"end":{"row":869,"column":0},"action":"remove","lines":["",""],"id":214}],[{"start":{"row":868,"column":2},"end":{"row":868,"column":3},"action":"remove","lines":[" "],"id":215}],[{"start":{"row":868,"column":1},"end":{"row":868,"column":2},"action":"remove","lines":[" "],"id":216}],[{"start":{"row":868,"column":0},"end":{"row":868,"column":1},"action":"remove","lines":[" "],"id":217}],[{"start":{"row":867,"column":4},"end":{"row":868,"column":0},"action":"remove","lines":["",""],"id":218}],[{"start":{"row":867,"column":0},"end":{"row":867,"column":4},"action":"remove","lines":["    "],"id":219}],[{"start":{"row":866,"column":3},"end":{"row":867,"column":0},"action":"remove","lines":["",""],"id":220}],[{"start":{"row":866,"column":2},"end":{"row":866,"column":3},"action":"remove","lines":[" "],"id":221}],[{"start":{"row":866,"column":1},"end":{"row":866,"column":2},"action":"remove","lines":[" "],"id":222}],[{"start":{"row":866,"column":0},"end":{"row":866,"column":1},"action":"remove","lines":[" "],"id":223}],[{"start":{"row":865,"column":3},"end":{"row":866,"column":0},"action":"remove","lines":["",""],"id":224}],[{"start":{"row":14,"column":35},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":225}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":29},"action":"insert","lines":["use Wamania\\Snowball\\Spanish;"],"id":226}],[{"start":{"row":232,"column":45},"end":{"row":233,"column":0},"action":"insert","lines":["",""],"id":227},{"start":{"row":233,"column":0},"end":{"row":233,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":233,"column":8},"end":{"row":233,"column":9},"action":"insert","lines":["d"],"id":228}],[{"start":{"row":233,"column":9},"end":{"row":233,"column":10},"action":"insert","lines":["d"],"id":229}],[{"start":{"row":233,"column":10},"end":{"row":233,"column":12},"action":"insert","lines":["()"],"id":230}],[{"start":{"row":233,"column":12},"end":{"row":233,"column":13},"action":"insert","lines":[";"],"id":231}],[{"start":{"row":235,"column":34},"end":{"row":235,"column":54},"action":"remove","lines":["$request->input('k')"],"id":232}],[{"start":{"row":233,"column":11},"end":{"row":233,"column":31},"action":"insert","lines":["$request->input('k')"],"id":233}],[{"start":{"row":234,"column":33},"end":{"row":235,"column":0},"action":"insert","lines":["",""],"id":234},{"start":{"row":235,"column":0},"end":{"row":235,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":235,"column":8},"end":{"row":235,"column":9},"action":"insert","lines":["$"],"id":235}],[{"start":{"row":235,"column":9},"end":{"row":235,"column":10},"action":"insert","lines":["k"],"id":236}],[{"start":{"row":235,"column":10},"end":{"row":235,"column":11},"action":"insert","lines":["0"],"id":237}],[{"start":{"row":235,"column":10},"end":{"row":235,"column":11},"action":"remove","lines":["0"],"id":238}],[{"start":{"row":235,"column":10},"end":{"row":235,"column":11},"action":"insert","lines":["="],"id":239}],[{"start":{"row":235,"column":11},"end":{"row":235,"column":12},"action":"insert","lines":["5"],"id":240}],[{"start":{"row":235,"column":12},"end":{"row":235,"column":13},"action":"insert","lines":[";"],"id":241}],[{"start":{"row":236,"column":34},"end":{"row":236,"column":35},"action":"insert","lines":["$"],"id":242}],[{"start":{"row":236,"column":35},"end":{"row":236,"column":36},"action":"insert","lines":["k"],"id":243}],[{"start":{"row":233,"column":8},"end":{"row":233,"column":9},"action":"insert","lines":["/"],"id":244}],[{"start":{"row":233,"column":9},"end":{"row":233,"column":10},"action":"insert","lines":["/"],"id":245}],[{"start":{"row":866,"column":15},"end":{"row":866,"column":34},"action":"remove","lines":["$this->sendResponse"],"id":246}],[{"start":{"row":866,"column":15},"end":{"row":866,"column":16},"action":"remove","lines":["("],"id":247}],[{"start":{"row":866,"column":46},"end":{"row":866,"column":47},"action":"remove","lines":[")"],"id":248}],[{"start":{"row":866,"column":45},"end":{"row":866,"column":46},"action":"remove","lines":["0"],"id":249}],[{"start":{"row":866,"column":44},"end":{"row":866,"column":45},"action":"remove","lines":["0"],"id":250}],[{"start":{"row":866,"column":43},"end":{"row":866,"column":44},"action":"remove","lines":["2"],"id":251}],[{"start":{"row":866,"column":42},"end":{"row":866,"column":43},"action":"remove","lines":[","],"id":252}],[{"start":{"row":236,"column":7},"end":{"row":236,"column":38},"action":"remove","lines":[" $this->insertMatrizkmeans($k);"],"id":253}],[{"start":{"row":233,"column":13},"end":{"row":233,"column":33},"action":"remove","lines":["$request->input('k')"],"id":254}],[{"start":{"row":234,"column":31},"end":{"row":234,"column":51},"action":"insert","lines":["$request->input('k')"],"id":255}],[{"start":{"row":862,"column":36},"end":{"row":862,"column":37},"action":"insert","lines":["$"],"id":256}],[{"start":{"row":862,"column":37},"end":{"row":862,"column":38},"action":"insert","lines":["k"],"id":257}],[{"start":{"row":866,"column":41},"end":{"row":866,"column":43},"action":"insert","lines":["$k"],"id":258}],[{"start":{"row":235,"column":8},"end":{"row":235,"column":13},"action":"remove","lines":["$k=5;"],"id":259}],[{"start":{"row":235,"column":0},"end":{"row":235,"column":8},"action":"remove","lines":["        "],"id":260}],[{"start":{"row":234,"column":53},"end":{"row":235,"column":0},"action":"remove","lines":["",""],"id":261}],[{"start":{"row":854,"column":19},"end":{"row":854,"column":20},"action":"insert","lines":["t"],"id":262}],[{"start":{"row":854,"column":20},"end":{"row":854,"column":21},"action":"insert","lines":["a"],"id":263}],[{"start":{"row":854,"column":21},"end":{"row":854,"column":22},"action":"insert","lines":["t"],"id":264}],[{"start":{"row":854,"column":21},"end":{"row":854,"column":22},"action":"remove","lines":["t"],"id":265}],[{"start":{"row":854,"column":20},"end":{"row":854,"column":21},"action":"remove","lines":["a"],"id":266}],[{"start":{"row":854,"column":19},"end":{"row":854,"column":20},"action":"remove","lines":["t"],"id":267}]]},"ace":{"folds":[{"start":{"row":147,"column":5},"end":{"row":161,"column":4},"placeholder":"..."},{"start":{"row":241,"column":53},"end":{"row":434,"column":4},"placeholder":"..."},{"start":{"row":437,"column":83},"end":{"row":481,"column":4},"placeholder":"..."},{"start":{"row":484,"column":53},"end":{"row":555,"column":2},"placeholder":"..."},{"start":{"row":557,"column":59},"end":{"row":572,"column":4},"placeholder":"..."},{"start":{"row":630,"column":38},"end":{"row":639,"column":4},"placeholder":"..."},{"start":{"row":641,"column":46},"end":{"row":647,"column":4},"placeholder":"..."},{"start":{"row":685,"column":40},"end":{"row":716,"column":4},"placeholder":"..."},{"start":{"row":717,"column":58},"end":{"row":737,"column":4},"placeholder":"..."},{"start":{"row":738,"column":71},"end":{"row":753,"column":4},"placeholder":"..."},{"start":{"row":755,"column":59},"end":{"row":760,"column":4},"placeholder":"..."},{"start":{"row":761,"column":57},"end":{"row":784,"column":4},"placeholder":"..."}],"scrolltop":6700,"scrollleft":0,"selection":{"start":{"row":854,"column":19},"end":{"row":854,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":839,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1516842435749,"hash":"7d1dbf8987ead75835c8fc789510a564008e5f18"}