<?php 
function get_data($selected = array())
{
    include 'koneksi.php';
    $rows = mysqli_query($db,"SELECT r.kode_penyakit, r.kode_gejala,  r.nilai  
        FROM tb_penyakit r  
        WHERE r.kode_gejala IN ('".implode("','", $selected)."') ORDER BY r.kode_penyakit, r.kode_gejala");
    $data = array();
    foreach($rows as $row)
    {
        $data[$row['kode_penyakit']][$row['kode_gejala']] = $row['nilai'];        
    }
    return $data;
}

function bayes($data = array(), $bobot = array())
{
    $result = array();
    foreach($data as $key => $val)
    {
        $result['kali'][$key] = $bobot[$key]['bobot'];
        foreach($val as $k => $v)
        {
            $result['kali'][$key]*=$v;
        }
    }
    
    $result['total'] = array_sum($result['kali']);
    foreach($result['kali'] as $key => $val)
    {
        $result['hasil'][$key] = $val / $result['total'];
    }
    
    return $result;
}
?>