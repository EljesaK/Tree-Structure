<div class="tf-tree example">
    <?php
        function print_elem($obj): void
        {
            echo  "<li><span class='tf-nc'";
            echo $obj->color_hex ? "style='background-color:#$obj->color_hex'" : '';
            echo "data-bs-toggle='tooltip' data-bs-placement='top'
                  data-bs-custom-class='custom-tooltip'
                  data-bs-title='".$obj->description."'";
            echo ">$obj->name</span>";
            if(is_array($obj->children_nodes) && count($obj->children_nodes) > 0) {
                echo "<ul>";
                foreach ($obj->children_nodes as $node)
                    print_elem($node);
                echo "</ul>";
            }
            echo "</li>";
        }
        $allTree = get_node($conn, root_element($conn)->id);
        print_elem($allTree);
    ?>
</div>


