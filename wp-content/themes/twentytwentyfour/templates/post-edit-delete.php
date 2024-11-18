<?php
/*
Template Name: Category Page
*/

get_header(); // 헤더를 가져옵니다
?>

<div class="content">
    <h1><?php the_title(); ?></h1> <!-- 페이지 제목을 표시 -->

    <?php
    // 특정 카테고리의 글 목록을 가져오는 WP_Query 인스턴스를 생성
    $args = array(
        'category_name' => 'image-post', // 카테고리 슬러그를 지정
        'posts_per_page' => 10,    // 한 번에 표시할 포스트 수
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        echo '<ul>';
        while ($query->have_posts()) : $query->the_post();
            // 포스트 제목과 링크를 출력
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        endwhile;
        echo '</ul>';
    else :
        // 글이 없을 경우 메시지 출력
        echo '<p>해당 카테고리에 글이 없습니다.</p>';
    endif;

    // 쿼리 후 전역 포스트 데이터를 재설정
    wp_reset_postdata();
    ?>
</div>

<?php
get_footer(); // 푸터를 가져옵니다
?>
