<?php include $_SERVER['DOCUMENT_ROOT'] . '/edenListPage/common/page/head.php';

// $mCode = '05';
// $lCode = '0502';

?>
<body>

<div class="container">
	<!-- gnb -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/edenListPage/common/page/header.php'; ?>


	<div class="wrapper">
		<!-- lnb -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/edenListPage/stats/stats_left.php'; ?>

		<div class="contents">
			<div class="set_field">
				<div class="field_title"><span class="title_mark">■ 데이터베이스 검색</span></div>
				<table class="set_table">
					<colgroup>
						<col width="200">
						<col width="*">
						<col width="200">
						<col width="*">
					</colgroup>
					<tbody>
					<tr>
						<th>상품명</th>
						<td colspan="">
							<span class="sbox small">
								<select>
									<option>전체</option>
									<option>카테고리명</option>
								</select>
							</span>
							<input class="tbox ">
						</td>
						<th>성별</th>
						<td>
							<label>
								<input type="radio" name="user_type" checked>
								<span>전체</span>
							</label>
							<label class="ml10">
								<input type="radio" name="user_type">
								<span>남성</span>
							</label>
							<label class="ml10">
								<input type="radio" name="user_type">
								<span>여성</span>
							</label>
						</td>
					</tr>
					<!-- <tr>
						<th>날씨별</th>
						<td>
							<span class="sbox">
								<select>
									<option>전체</option>
									<option>맑음</option>
									<option>흐림</option>
									<option>비</option>
									<option>눈</option>
								</select>
							</span>
							<span class="sbox ml5">
								<select>
									<option>선택</option>
									<option>1mm ~ 5mm</option>
									<option>5mm ~ 10mm</option>
									<option>10mm 이상</option>
								</select>
							</span>
						</td>
					</tr> -->
					<tr>
						<th>시간별</th>
						<td colspan="3">
							<span class="sbox">
								<select>
									<option>0시</option>
									<option>1시</option>
									<option>2시</option>
									<option>3시</option>
									<option>4시</option>
								</select>
							</span>
							<span class="hyphen"> ~</span>
							<span class="sbox ml5">
								<select>
									<option>24시</option>
									<option>5시</option>
									<option>6시</option>
									<option>7시</option>
								</select>
							</span>
						</td>
					</tr>
					<tr>
						<th>상품유형</th>
						<td colspan="3">
							<span class="sbox">
								<select>
									<option>대분류</option>
									<option>패션의류</option>
									<option>패션잡화</option>
								</select>
							</span>
							<span class="sbox ml10">
								<select>
									<option>중분류</option>
									<option>여성의류</option>
									<option>남성의류</option>
									<option>여성 언더웨어/잠옷</option>
									<option>남성 언더웨어/잠옷</option>
									<option>아동의류</option>
								</select>
							</span>
							<span class="sbox ml10">
								<select>
									<option>소분류</option>
									<option>니트/스웨터</option>
									<option>카디건</option>
									<option>원피스</option>
									<option>티셔츠</option>
									<option>블라우스/셔츠</option>
									<option>점퍼</option>
									<option>재킷</option>
									<option>코트</option>
								</select>
							</span>
						</td>
					</tr>
					<tr>
						<th>지역별</th>
						<td colspan="3">
							<label>
								<input type="checkbox" name="pay_type">
								<span>서울</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>부산</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>대구</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>인천</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>광주</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>대전</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>울산</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>세종</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>경기도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>강원도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>충청북도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>충청남도</span>
							</label><label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>전라북도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>전라남도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>경상북도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>경상남도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>제주도</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="pay_type">
								<span>해외</span>
							</label>
						</td>
					</tr>
					<tr>
						<th>결제유형</th>
						<td colspan="3">
							<label class="">
								<input type="checkbox" name="buy_type">
								<span>신용카드</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="buy_type">
								<span>네이버페이</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="buy_type">
								<span>가상계좌</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="buy_type">
								<span>휴대폰결제</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="buy_type">
								<span>카카오페이</span>
							</label>
							<label class="ml10">
								<input type="checkbox" name="buy_type">
								<span>무통장입금</span>
							</label>
						</td>
					</tr>
					<tr>
						<th>기간</th>
						<td colspan="3">
							<input id="dateS" class="tbox"> ~ <input id="dateE" class="tbox">
							<a href="javascript:setSearchDate('0d')" class="btn smaller higher col_grey ml10">당일</a>
							<a href="javascript:setSearchDate('1d')" class="btn smaller higher col_grey ml5">어제</a>
							<a href="javascript:setSearchDate('1w')" class="btn smaller higher col_grey ml5">일주일</a>
							<a href="javascript:setSearchDate('1m')" class="btn smaller higher col_grey ml5">1달</a>
							<a href="javascript:setSearchDate('3m')" class="btn smaller higher col_grey ml5">3달</a>
							<a href="javascript:setSearchDate('6m')" class="btn smaller higher col_grey ml5">6달</a>
						</td>
					</tr>
					</tbody>
				</table>
				<div class="set_menu">
					<a href="javascript:void(0)" class="btn normal col_main f_w">검색</a>
					<a href="javascript:void(0)" class="btn normal col_darkGrey f_w ml5">전체목록</a>
				</div>
			</div>
			<div class="list_field">
				<div class="field_title"><span class="title_mark">■ 데이터베이스 통계</span></div>
				<div class="list_menu">
					<span class="right_menu">
						<a href="javascript:void(0)" class="btn col_darkGrey f_w">엑셀저장</a>
					</span>
				</div>
				<table class="list_table">
					<colgroup>
						<col width="70">
						<col width="250">
						<col width="150">
						<col width="150">
						<col width="80">
						<col width="150">
						<col width="100">
						<col width="250">
						<col width="80">
						<col width="100">
						<col width="150">
					</colgroup>
					<thead>
					<tr>
						<th>번호</th>


						
						<th>주문번호</th>
						<th>관리자 메모</th>


						<th>주문자명</th>
						<th>주문자연락처</th>
						


						<th>수령자명</th>
						<th>수령자전화번호</th>


						<th>우편번호</th>
						<th>주소</th>



						<th>상품코드</th>
						<th>상품유형</th>
						<th>카테고리명 / 상품명</th>
						<th>주문수량</th>
						<th>상품금액</th>
						<th>공급사명</th>


						<th>단가</th>
						<th>공급가</th>
						<th>과세여부</th>
						<th>브라우저 종류=사용한 브라우저 종류?</th>
						
					

						<th>옵션명</th>
						<th>추가옵션명</th>
						
						
						<th>고객 요청사항</th>



						<th>결제금액</th>
						<th>배송비합계= 배송비+추가배송비</th>
						<th>착불/선결제 여부</th>



						<th>택배사</th>
						<th>배송번호</th>
						<th>주문상태</th>
						<th>묶음배송여부</th>
						<th>배송준비일</th>
						<th>통관번호</th>
						<th>주문상품고유번호</th>



						<th>결제수단</th>
						<th>결제일시</th>
						<th>구매일시</th>
						<th>현금영수증 여부</th>

						<th>포인트사용금액</th>
						<th>쿠폰사용금액</th>




						<th>부분취소금액+부분취소수량</th>





						
						
						
					
						
						

					</tr>
					</thead>
					<tbody>
					<tr>
						<td>4</td>
						<td>
							<div class="f_grey">TOP</div>
							<div>알록달록 스트라이프 티</div>
						</td>
						<td>12,000</td>
						<td>
							<div>패션의류</div>
							<div>여성의류</div>
							<div>티셔츠</div>
						</td>
						<td>남</td>
						<td>
							<div>서울</div>
							<div>비 / 1mm~5mm</div>
						</td>
						<td>2018-05-22 15:22:22</td>
						<td>여름용, 시원한, 잇템</td>
						<td>카카오톡</td>
						<td>빨강</td>
						<td>스트라이프</td>
					</tr>
					<tr>
						<td>3</td>
						<td>
							<div class="f_grey">PANTS</div>
							<div>스키니진</div>
						</td>
						<td>65,000</td>
						<td>
							<div>패션의류</div>
							<div>남성의류</div>
							<div>카디건</div>
						</td>
						<td>남</td>
						<td>
							<div>전라북도</div>
							<div>맑음</div>
						</td>
						<td>2018-05-01 21:54:11</td>
						<td>핏, 슬림핏, 라인</td>
						<td>페이스북</td>
						<td>파랑</td>
						<td>무지</td>
					</tr>
					<tr>
						<td>2</td>
						<td>
							<div class="f_grey">TOP</div>
							<div>떙글떙글 잠옷</div>
						</td>
						<td>25,000</td>
						<td>
							<div>패션의류</div>
							<div>아동의류</div>
							<div>재킷</div>
						</td>
						<td>여</td>
						<td>
							<div>부산</div>
							<div>눈 / 1mm ~ 5mm</div>
						</td>
						<td>2018-05-06 11:22:10</td>
						<td>커플, 잠옷, 잠잘 때</td>
						<td>인스타그램</td>
						<td>노랑, 파랑</td>
						<td>땡땡이</td>
					</tr>
					</tbody>
				</table>
				<div class="page_group clearFix">
					<ul class="page_box">
						<li class="first arrow">
							<a href="#none"></a>
						</li>
						<li class="prev arrow">
							<a href="#none"></a>
						</li>
						<li class="on">
							<a href="#none">1</a>
						</li>
						<li class="">
							<a href="#none">2</a>
						</li>
						<li class="next arrow">
							<a href="#none "></a>
						</li>
						<li class="end arrow">
							<a href="#none"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- 푸터 -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/edenListPage/common/page/footer.php'; ?>


		<!-- 끝 -->
	</div>


</body>
</html>
