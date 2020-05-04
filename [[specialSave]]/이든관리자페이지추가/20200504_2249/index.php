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
						<th>주문시간</th>
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
						<col width="60">
						<col width="90">
						<col width="80">
						<col width="80">
						<col width="80">
						<!-- <col width="150"> -->
						<col width="190">
						<col width="130">
						<col width="150">
						<col width="80">
						<col width="80">
					</colgroup>
					<thead>
					<tr>
						<th>번호</th>
						<th>주문번호</th>
						<th>주문자정보</th>
						<th>수령인정보</th>
						<th>주소</th>
						<!-- <th>상품정보</th> -->
						<th>주문정보</th>
						<th>결제정보</th>
						<th>배송정보</th>
						<th>주문상태</th>
						<th>상세</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>4</td>
						<td>
							<div>
								<a href="#none" class="link">1906201538431_1</a>
							</div>
							<div>
								<a href="#none" class="btn col_grey smaller memo mt10" onclick="memo_pop()">메모</a>
							</div>
						</td>
						<td>
							<div>vuvuvu</div>
							<div>이든 / 남</div>
							<div><a href="javascript:void(0)" class="btn phone" onclick="sms_pop()">01011112222</a></div>
						</td>
						<td>
							<div>AUAUAU</div>
							<div>리틀 / 여</div>
							<div><a href="javascript:void(0)" class="btn phone" onclick="sms_pop()">01011134444</a></div>
						</td>
						<td>(05028) 서울 광진구 아차산로41가길 2 117동 702호</td>
						<!-- <td class="text-left">
							<a href="#none" class="link">상품코드 : 192</a>
							<div class="bold">하이퀄리티 레이스 블라우스(77가능)</div>
							<div>카테고리 : 블라우스</div>
							<div>상품금액 : 31,800원</div>
						</td> -->
						<td class="text-left">
							<!-- <div>주문플랫폼 : 사파리(safari)</div> -->
							<div>카테고리 : 블라우스</div>
							<div class="bold">하이퀄리티 레이스 블라우스 / 1개</div>
							<div>컬러 - 아이보리</div>
							<div>크기 - 대</div>
							<div>주문시간 : 2019-05-28 09:49:48</div>
						</td>
						<td class="text-right">
							<div>결제수단 : 신용카드</div>
							<div>현금영수증 : N</div>
							<div>상품금액 : 34,000원</div>
							<div>배송비 : 3,000원</div>
							<div>포인트사용 : 3,000원</div>
							<div>쿠폰사용 : 34,000원</div>
							<div class="bold">총결제금액 : 0원</div>
						</td>
						<td>
							<div>배송사 : CJ택배</div>
							<div>배송번호 : 123456701244</div>
							<div>묶음배송 : N</div>
							<div class="bold">착불</div>
						</td>
						<td>
							<!-- <span class="tag col_ash f_w">배송완료</span> -->
							<!-- <span class="tag col_blue f_w">부분배송중</span> -->
							<!-- <span class="tag col_grey">상품준비중</span> -->
							<span class="tag col_blue f_w">결제완료</span>
						</td>
						<td class="manage_tab">
							<div>
								<a href="/edenListPage/stats/statusSpec" class="btn small col_main f_w">상세보기</a>
							</div>
						</td>
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
