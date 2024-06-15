@extends('frontend.customer.index')

@section('customer')
<div class="page account-page customer-info-page mt-3">
    <div class="page-title d-block d-md-none text-center">
        <h1 class="fs-4">Thông tin tài khoản</h1>
    </div>
    <div class="page-body border px-2 pt-2">
        <form method="post" action="#">
            <div class="fieldset">
                <div class="row ">
                    <div class="mb-3 col-md-6">
                        <label for="hoten">Tên, Họ:</label>
                        <input type="text" class="form-control " id="hoten" name="fullname" value="Phạm duy khang">
                    </div>
                    <div class="col-md-6 mb-3 ">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control " id="email" name="email" value="phamduykhang11a2@gmail.com">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone">Điện thoại:</label>
                        <input type="number" class="form-control form-control-lg" id="phone" name="phone_number" value="0905263041">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Giới tính:</label>
                        <div class="gender mt-2">
                            <input type="radio" value="M" id="gender-male" name="Gender">
                            <label class="forcheckbox" for="gender-male">Nam</label>
                            <input type="radio" value="F" id="gender-female" name="Gender">
                            <label class="forcheckbox" for="gender-female">Nữ</label>
                        </div>
                    </div>
                </div>
                <div class="inputs date-of-birth"><label>Ngày sinh:</label>
                    <div class="date-picker-wrapper">
                        <div class="row">
                            <div class="col-4">
                                <select class="form-select">
                                    <option value="0">ngày</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12" selected="">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select ">
                                    <option value="0">tháng</option>
                                    <option value="1" selected="">Tháng Giêng</option>
                                    <option value="2">Tháng Hai</option>
                                    <option value="3">Tháng Ba</option>
                                    <option value="4">Tháng Tư</option>
                                    <option value="5">Tháng Năm</option>
                                    <option value="6">Tháng Sáu</option>
                                    <option value="7">Tháng Bảy</option>
                                    <option value="8">Tháng Tám</option>
                                    <option value="9">Tháng Chín</option>
                                    <option value="10">Tháng Mười</option>
                                    <option value="11">Tháng Mười Một</option>
                                    <option value="12">Tháng Mười Hai</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select class="form-select">
                                    <option value="0">Năm</option>
                                    <option value="1914">1914</option>
                                    <option value="1915">1915</option>
                                    <option value="1916">1916</option>
                                    <option value="1917">1917</option>
                                    <option value="1918">1918</option>
                                    <option value="1919">1919</option>
                                    <option value="1920">1920</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003" selected="">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <span class="field-validation-valid" data-valmsg-for="DateOfBirthDay" data-valmsg-replace="true"></span> <span class="field-validation-valid" data-valmsg-for="DateOfBirthMonth" data-valmsg-replace="true"></span>
                    <span class="field-validation-valid" data-valmsg-for="DateOfBirthYear" data-valmsg-replace="true"></span>
                </div>
                <div class="mt-3 inputs user-name">
                    <label for="Username">Username:</label> <span class="readonly-username">khangpham</span>
                </div>
                <div class="buttons mb-3">
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection