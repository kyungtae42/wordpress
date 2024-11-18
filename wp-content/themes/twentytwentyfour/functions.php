<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

function custom_image_post_form() {
	if(get_current_user_id() !== 0) {
		 // WP_Query 설정
		 $args = array(
			'post_type' => 'post',
			'category_name' => sanitize_text_field('celeb-info')
		);
		$query = new WP_Query($args);
		if (isset($_POST['submit_image']) && !empty($_FILES['user_image']['name'])) {
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
			require_once( ABSPATH . 'wp-admin/includes/image.php' );
			require_once( ABSPATH . 'wp-admin/includes/media.php' );
			require_once( ABSPATH . 'wp-admin/includes/post.php' );
	
			$user_image_file = $_FILES['user_image'];
			$product_image_file = $_FILES['product_image'];
			$user_upload = wp_handle_upload($user_image_file, array('test_form' => false));
			$product_upload = wp_handle_upload($product_image_file, array('test_form' => false));

			if (!isset($user_upload['error']) && isset($user_upload['url'])) {
				// 셀렙 이미지 업로드 성공
				echo "Image uploaded successfully!";
			} else {
				// 오류 처리
				echo $user_upload['error'];
			}
			
			if (!isset($product_upload['error']) && isset($product_upload['url'])) {
				// 상품 이미지 업로드 성공
				echo "Image uploaded successfully!";
			} else {
				// 오류 처리
				echo $product_upload['error'];
			}
			
			$user_file_path = $user_upload['file'];
			$user_file_url = $user_upload['url'];
			$user_file_type = wp_check_filetype($user_file_path, null);
			$product_file_url = $product_upload['url'];
	
			// 첨부 파일 등록을 위한 배열 생성
			$attachment = array(
				'guid'           => $user_file_url, 
				'post_mime_type' => $user_file_type['type'],
				'post_title'     => sanitize_file_name($_FILES['user_image']['name']),
				'post_content'   => '',
				'post_status'    => 'inherit'
			);
	
			// 첨부 파일로 등록 및 ID 획득
			$attach_id = wp_insert_attachment($attachment, $user_file_path);
	
			// 이미지 메타데이터 생성 및 저장
			$attach_data = wp_generate_attachment_metadata($attach_id, $user_file_path);
			wp_update_attachment_metadata($attach_id, $attach_data);
	
			$category_id = get_category_by_slug('image-post')->term_id;
	
			$post_id = wp_insert_post(array(
				'post_title'   => $_POST['product-name'],
				'post_status'  => 'publish',
				'post_type'    => 'post',
				'post_category'=> array($category_id),
			));
	
			if ($post_id) {
				update_post_meta($post_id, 'user_image_url', $user_file_url);
				update_post_meta($post_id, 'coordinates', array('x' => $_POST['link-position-x'], 'y' => $_POST['link-position-y']));
				update_post_meta($post_id, 'celeb_id', $_POST['celeb-id']);
				update_post_meta($post_id, 'product_name', $_POST['product-name']);
				update_post_meta($post_id, 'product_image_url', $product_file_url);
				update_post_meta($post_id, 'brand_name', $_POST['brand-name']);
				update_post_meta($post_id, 'product_url', $_POST['product-url']);
				set_post_thumbnail($post_id, $attach_id);
	
				echo json_encode(array('success' => true));
			} else {
				echo json_encode(array('success' => false, 'message' => 'Failed to create post'));
			}
		}
		// 폼 HTML
		$upload_form = '
		<form id="upload-form" method="post" enctype="multipart/form-data">
			<div style="position: relative; display: inline-block;">
				<img id="image-preview" src="#" style="display:none; max-width: 100%; margin-top: 20px;" />
				<img id="tooltip-icon" src="/wordpress/wp-content/themes/twentytwentyfour/assets/images/question-mark-icon.jpg"
				style="position: absolute; left: 0px; top: 0px; width: 30px; height: 30px" />
			</div> <br/>
			<input type="file" name="user_image" id="user_image" accept="image/*">
			<div>
				<p>셀렙 이름</p>
				<select name="celeb-id" id="celeb-id">';
				while ($query->have_posts()) {
					$query->the_post();
					$upload_form .= '<option value=' . get_the_ID() . '>' . get_the_title() . '</option>';
				}
				$upload_form .= '</select>
			</div>
			<div>
				<p>상품 이름</p>
				<input type="text" name="product-name" id="product-name">
			</div>
			<div>
				<p>브랜드 이름</p>
				<input type="text" name="brand-name" id="brand-name">
			</div>
			<div>
				<p>상품 이미지</p>
				<input type="file" name="product_image" id="product_image" accept="image/*">
			</div>
			<div>
				<p>상품 URL</p>
				<input type="text" name="product-url" id="product-url">
			</div>
			<div>
				<input type="text" name="link-position-x" id="link-position-x">
				<input type="text" name="link-position-y" id="link-position-y">
			</div>
			<input type="submit" name="submit_image" value="Upload Image"> <br/>
		</form>
		';
		return $upload_form;
	} else {
		wp_redirect(wp_login_url());
		exit;
	}
}
add_shortcode('image_post_form', 'custom_image_post_form');

function custom_image_update_form() {
	if (isset($_GET['pid'])) {
		$post_id = intval($_GET['pid']); // 안전하게 정수로 변환

        // 해당 ID로 포스트 가져오기
        $post = get_post($post_id);
		$current_user_id = get_current_user_id();

		if($post) {
			$title = get_the_title($post);
			$author_id = get_post_field('post_author', $post_id);
            $post_content = get_the_content(null, false, $post);
			$user_image_url = get_post_meta($post->ID, 'user_image_url', true);
			$coordinates = get_post_meta($post->ID, 'coordinates', true);
			$product_name = get_post_meta($post->ID, 'product_name', true);
			$brand_name = get_post_meta($post->ID, 'brand_name', true);
			$product_image_url = get_post_meta($post->ID, 'product_image_url', true);
			$product_url = get_post_meta($post->ID, 'product_url', true);	
		}

		if($current_user_id == $author_id) {
			$args = array(
			'post_type' => 'post',
			'category_name' => sanitize_text_field('celeb-info')
		);
		$query = new WP_Query($args);
			if (isset($_POST['submit_image'])) {
				require_once( ABSPATH . 'wp-admin/includes/file.php' );
				require_once( ABSPATH . 'wp-admin/includes/image.php' );
				require_once( ABSPATH . 'wp-admin/includes/media.php' );
				require_once( ABSPATH . 'wp-admin/includes/post.php' );
				
				if (!empty($_FILES['user_image']['name'])) {
					$user_image_file = $_FILES['user_image'];
	
					wp_delete_attachment($user_image_url, true);
	
					$user_upload = wp_handle_upload($user_image_file, array('test_form' => false));
					
					if (!isset($user_upload['error']) && isset($user_upload['url'])) {
						// 이미지 업로드 성공
						echo "Image uploaded successfully!";
						update_post_meta($post_id, 'user_image_url', $user_upload['url']);
					} else {
						// 오류 처리
						echo $user_upload['error'];
					}

					$user_file_path = $user_upload['file'];
					$user_file_url = $user_upload['url'];
					$user_file_type = wp_check_filetype($user_file_path, null);

					// 첨부 파일 등록을 위한 배열 생성
					$attachment = array(
						'guid'           => $user_file_url, 
						'post_mime_type' => $user_file_type['type'],
						'post_title'     => sanitize_file_name($_FILES['user_image']['name']),
						'post_content'   => '',
						'post_status'    => 'inherit'
					);

					// 첨부 파일로 등록 및 ID 획득
					$attach_id = wp_insert_attachment($attachment, $user_file_path);

					// 이미지 메타데이터 생성 및 저장
					$attach_data = wp_generate_attachment_metadata($attach_id, $user_file_path);
					wp_update_attachment_metadata($attach_id, $attach_data);
				}
				if (!empty($_FILES['product_image']['name'])) {
					$product_image_file = $_FILES['product_image'];
	
					wp_delete_attachment($product_image_url, true);
	
					$product_upload = wp_handle_upload($product_image_file, array('test_form' => false));
					$product_file_url = $product_upload['url'];
					
					if (!isset($product_upload['error']) && isset($product_upload['url'])) {
						// 이미지 업로드 성공
						echo "Image uploaded successfully!";
						update_post_meta($post_id, 'product_image_url', $product_upload['url']);
					} else {
						// 오류 처리
						echo $product_upload['error'];
					}
				}
				$category_id = get_category_by_slug('image-post')->term_id;
		
				$post_id = wp_insert_post(array(
					'ID' => $post_id,
					'post_title'   => $_POST['title'],
					'post_content' => $_POST['celeb-name'],
					'post_status'  => 'publish',
					'post_type'    => 'post',
					'post_category'=> array($category_id),
				));
		
				if ($post_id) {
					update_post_meta($post_id, 'coordinates', array('x' => $_POST['link-position-x'], 'y' => $_POST['link-position-y']));
					update_post_meta($post_id, 'product_name', $_POST['product-name']);
					update_post_meta($post_id, 'brand_name', $_POST['brand-name']);
					update_post_meta($post_id, 'product_url', $_POST['product-url']);
					set_post_thumbnail($post_id, $attach_id);
					
					echo json_encode(array('success' => true));
				} else {
					echo json_encode(array('success' => false, 'message' => 'Failed to create post'));
				}
			}		
	
			$upload_form = '
				<form id="upload-form" method="post" enctype="multipart/form-data">
					<input type="file" name="user_image" id="user_image" accept="image/*">
					<div style="position: relative; display: inline-block;">
						<img id="image-preview" src=' . $user_image_url . ' style="display:block; max-width: 300px; margin-top: 20px;" />
						<img id="tooltip-icon" src="/wordpress/wp-content/themes/twentytwentyfour/assets/images/question-mark-icon.jpg"
						style="position: absolute; left: 0px; top: 0px; width: 30px; height: 30px" />
					</div> <br/>
					<div>
						<p>제목</p>
						<input type="text" value="' . $title . '" name="title" id="title">
					</div>
					<div>
						<p>셀렙 이름</p>
						<input type="text" value="' . $post_content . '" name="celeb-name" id="celeb-name">
					</div>
					<div>
						<p>상품 이름</p>
						<input type="text" value="' . $product_name . '" name="product-name" id="product-name">
					</div>
					<div>
						<p>브랜드 이름</p>
						<input type="text" value="' . $brand_name . '" name="brand-name" id="brand-name">
					</div>
					<div>
						<p>상품 이미지</p>
						<input type="file" name="product_image" id="product_image" accept="image/*">
					</div>
					<div>
						<p>상품 URL</p>
						<input type="text" value="' . $product_url . '" name="product-url" id="product-url">
					</div>
					<div>
						<input type="text" value=' . $coordinates['x'] . ' name="link-position-x" id="link-position-x">
						<input type="text" value=' . $coordinates['y'] . ' name="link-position-y" id="link-position-y">
					</div>
					<input type="submit" name="submit_image" value="Upload Image"> <br/>
				</form>
				  ';
			return $upload_form;
		} else {
			return '작성자 본인만 수정할 수 있습니다.';
		}
	} else {
		return 'Post Not Found';
	}
}
add_shortcode('image_update_form', 'custom_image_update_form');

function display_image_with_icon($content) {
    global $post;
	if(in_category('image-post')) {
		$user_image_url = get_post_meta($post->ID, 'user_image_url', true);
		$coordinates = get_post_meta($post->ID, 'coordinates', true);
		$product_name = get_post_meta($post->ID, 'product_name', true);
		$celeb_name = get_post_meta($post->ID, 'celeb_name', true);
		$brand_name = get_post_meta($post->ID, 'brand_name', true);
		$product_image_url = get_post_meta($post->ID, 'product_image_url', true);
		$product_url = get_post_meta($post->ID, 'product_url', true);

		if ($user_image_url && $coordinates) {
			$icon_html = '<div style="position: relative;">';
			$icon_html .= '<img src="' . esc_url($user_image_url) . '" style="width: 100%;">';
			$icon_html .= '<div style="position: absolute; top: ' . esc_attr($coordinates['y']) . 'px; left: ' . esc_attr($coordinates['x']) . 'px; 
				width: 20px; height: 20px; background-color: red; border-radius: 50%;"
				onmouseover="showTooltip()"></div>';
			$icon_html .= '<div id="tooltip" style="display: none; position: absolute; top: ' . esc_attr($coordinates['y'] + 15) . 'px; left: ' . esc_attr($coordinates['x']) . 'px;
				background: #fff; padding: 5px; border: 1px solid #ddd; border-radius: 5px;">
				<p>' . esc_attr($product_name) . '</p>
				<p>' . esc_attr($brand_name) . '</p>
                <a href="' . esc_url($product_url) . '" target="_blank" onmouseout="hideTooltip()">Go to Link</a>
            </div>';
			$icon_html .= '</div>';
			$icon_html .= '<div>';
			$icon_html .= '<div><img src="' . esc_url($product_image_url) . '" width="64px" height="64px"></div>';
			$icon_html .= '<div>' . esc_attr($product_name) . '</div>';
			$icon_html .= '<div>' . esc_attr($brand_name) . '</div>';
			$icon_html .= '<div><a href="' . esc_url($product_url) . '" target="_blank">' . esc_url($product_url) . '</a></div>';
			$icon_html .= '</div>';
			$icon_html .= '<a href="/wordpress/?page_id=64&pid=' . $post->ID . '">수정</a>';
		}
		$content .= $icon_html;
	}
	return $content;
}
add_filter('the_content', 'display_image_with_icon');

add_filter( 'relevanssi_modify_wp_query', 'rlv_modify_query' );
function rlv_modify_query( $query ) {
  $query->set( 'category__in', 5 );
  return $query;
}

// add_filter( 'get_search_form', 'rlv_modify_search_form' );
// function rlv_modify_search_form( $form ) {
// 	// $form = str_replace( 'class="search-field"', 'class="wp-block-search__input"', $form );
// 	// $form = str_replace( 'class="search-submit"', 'class="wp-block-search__button wp-element-button"', $form );
// 	$form = '<div class="wp-block-search__inside-wrapper ">
// 		<input class="wp-block-search__input" id="wp-block-search__input-2" placeholder="" value="" type="search" name="s"
// 		data-rlvlive="true" data-rlvparentel="#rlvlive_1" data-rlvconfig="default" required="" autocomplete="off"
// 		aria-owns="relevanssi_live_search_results_673562295794c" aria-autocomplete="both">
// 			<button aria-label="검색" class="wp-block-search__button wp-element-button" type="submit">검색</button>
// 		</div>';
// 	return $form;
// }

// 그리드 형태 포스트 목록 숏코드 함수
function grid_posts_shortcode($atts) {
    // 기본 속성 설정 (포스트 수와 카테고리 지정 가능)
    $atts = shortcode_atts(array(
        'posts_per_page' => 6,
        'category' => 'image-post',
    ), $atts);

    // WP_Query 설정
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => intval($atts['posts_per_page']),
        'category_name' => sanitize_text_field($atts['category']),
    );

    $query = new WP_Query($args);
    $output = '<div class="grid-posts-container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">';

    // 포스트 출력
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="grid-post-item" style="border: 1px solid #ddd; padding: 10px; text-align: center;">';
            $output .= '<a href="' . get_permalink() . '" style="text-decoration: none; color: inherit;">';
            
            // 썸네일 추가
            if (has_post_thumbnail()) {
                $output .= get_the_post_thumbnail(get_the_ID(), 'medium', array('style' => 'width: 100%; height: auto;'));
            }

            // 제목과 내용 추가
            $output .= '<h3 style="font-size: 1.2em; margin-top: 10px;">' . get_the_title() . '</h3>';
            $output .= '<p style="font-size: 0.9em; color: #555;">' . wp_trim_words(get_the_excerpt(), 15) . '</p>';
            $output .= '</a>';
			$output .= '<a href="/wordpress/?page_id=64&pid=' . get_the_ID() . '">수정</a></div>';
        }
    } else {
        $output .= '<p>No posts found.</p>';
    }

    $output .= '</div>';
    wp_reset_postdata(); // 쿼리 리셋
    return $output;
}

// 숏코드 등록
add_shortcode('grid_posts', 'grid_posts_shortcode');
