<?php
    echo "<hr/>Benchmark code_start code_end<br/>";
    echo $this->benchmark->elapsed_time('code_start', 'code_end');
    
    echo "<hr/>Benchmark Multiple Sets<br/>";
    echo $this->benchmark->elapsed_time('dog', 'cat')."<br/>";
    echo $this->benchmark->elapsed_time('cat', 'bird')."<br/>";
    echo $this->benchmark->elapsed_time('dog', 'bird');

    echo "<hr/>Displaying Total Execution Time<br/>";
    echo $this->benchmark->elapsed_time();

    echo "<hr/>Displaying Memory Consumption<br/>";
    echo $this->benchmark->memory_usage();
?>