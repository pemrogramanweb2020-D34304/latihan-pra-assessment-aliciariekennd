<?php
    $buku = array(array('judul'=>'Sherlock Holmes',
				  		'pengarang'=>'Arthur Cona Doyle',
				  		'harga'=>50000,
				  		'stok'=>20),
				  array('judul'=>'Arsene Lupin',
				  		'pengarang'=>'Maurice LeBlanc',
				  		'harga'=>250000,
				  		'stok'=>50),
				  array('judul'=>'Games Of Throne',
				  		'pengarang'=>'George R.R.Martin',
				  		'harga'=>125000,
				  		'stok'=>60),
                );
     $pembelian = array(array('judul'=>'Sherlock Holmes',
                             'jumlah'=>5),
                       array('judul'=>'Arsene Lupin',
                             'jumlah'=>2),
                       array('judul'=>'Game Of Throne',
                             'jumlah'=>4),
                    );
    $total = 0;
    echo "<table border='1'>";
    echo "<thead>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Harga</th>
          <th>Stok</th>
          </thead>";
    
    for($x=0;$x<count($buku);$x++){
        echo "<tr>";
        echo "<td>".$buku[$x]['judul']."</td>";
        echo "<td>".$buku[$x]['pengarang']."</td>";  
        echo "<td>".$buku[$x]['harga']."</td>";  
        echo "<td>".$buku[$x]['stok']."</td>";  
        echo "</tr>";
    }
    echo "</table";
    echo "<table border='1'>";
    echo "<thead>
          <th>Judul</th>
          <th>Jumlah</th>
          <th>Harga</th>
          </thead>";
          
    for($x=0;$x<count($pembelian);$x++){
        echo "<tr>";
        echo "<td>".$pembelian[$x]['judul']."</td>";
        echo "<td>".$pembelian[$x]['jumlah']."</td>";
        for($y=0;$y<count($buku);$y++){
            if($pembelian[$x]['judul']==$buku[$y]['judul']){
                $harga = $buku[$y]['harga']*$pembelian[$x]['jumlah'];
                break;
            }
        }
        $total = $total + $harga;
        echo "<td>".$harga."</td>";  
        echo "</tr>";
    }
    echo "</table>";
    echo "Total Harga = Rp$total";
?>