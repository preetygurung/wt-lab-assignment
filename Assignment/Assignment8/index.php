<?php
$gcesStaffs = [

    "Academic" => [
        [
            "Name" => "A",
            "Address" => "GBS",
            "phones" => ["254436","26356"],
            "subjects" => ["pst"]
        ],
        [
            "Name" => "B",
            "Address" => "GBS",
            "phones" => ["236572","745423"],
            "subjects" => ["Java", "web"]
        ],
        [
            "Name" => "C",
            "Address" => "GBS",
            "phones" => ["676477","364634"],
            "subjects" => ["C++"]
        ]
    ],
    "Non-academic" => [
        [
            "Name" => "X",
            "Address" => "GBS",
            "phones" => ["367673","24737"]
        ],
        [
            "Name" => "Y",
            "Address" => "GBS",
            "phones" => ["666635","654367"]
        ],
    ]
   
];
echo '<table border="2px" >';
echo '<tr><th>Faculty</th><th>Name</th> <th>Address</th> <th colspan=2>Phone number</th> <th colspan=2>Subjects</th></tr>';
echo '<tr>';
foreach ($gcesStaffs as $faculty => $details){
    echo '<tr>';
    
        foreach($details as $detail => $datas){
            echo "<td>$faculty</td>";
           foreach($datas as $data => $values){
        
           
            
            if(is_array($values)){
              
            
                foreach($values as $value => $v){
                    // echo "<td>$faculty</td>";
                    echo "<td> $v</td>";
                

                }
            }else {
                // echo "<td >$faculty</td>";

                echo "<td> $values </td>";
            
            }
           }
           echo '</tr>';
    
        
        
    } echo '</tr>';
}
    echo '</table>';

  
