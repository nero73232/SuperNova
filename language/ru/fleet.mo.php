<?php

/*
#############################################################################
#  Filename: fleet.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2009 MSW
#############################################################################
*/

/**
*
* @package language
* @system [Russian]
* @version 40a3.3
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

//$lang = array_merge($lang,
//$lang->merge(
$a_lang_array = (array(
  'flt_page2_title' => 'Выбор задания',
  'fl_title' => 'Флоты',
  'fl_expttl' => 'Экспедиции',
  'fl_mission' => 'Задание',
  'fl_count' => 'Количество',
  'fl_count_short' => 'К-во',
  'fl_from' => 'Откуда',
  'fl_from_t' => 'Возвращение',
  'fl_start_t' => 'Время',
  'fl_dest' => 'Куда',
  'fl_dest_t' => 'Прибытие',
  'fl_back_t' => 'Возвращение',
  'fl_back_in' => 'Осталось',
  'fl_order' => 'Приказ',
  'fl_get_to' => '(Т)',
  'fl_get_to_ttl' => 'Туда',
  'fl_back_to' => '(О)',
  'fl_back_to_ttl' => 'Обратно',
  'fl_associate' => 'Боевой союз',
  'fl_noslotfree' => 'Некому командовать флотом!',
  'fl_notback' => 'Флот не может вернуться!',
  'fl_onlyyours' => 'Вы можете возвращать только свой флот!',
  'fl_isback' => 'Флот возвращается',
  'fl_sback' => 'Назад',
  'fl_error' => 'Ошибка',
  'fl_new_miss' => 'Новое задание: выбрать корабли',
  'fl_fleet_typ' => 'Тип корабля',
  'fl_fleet_disp' => 'Количество',
  'fl_noplanetrow' => 'Системная ошибка получилась! ))',
  'fl_fleetspeed' => 'Скорость: ',
  'fl_selmax' => 'макс.',
  'fl_sur' => 'из',
  'fl_continue' => 'Далее',
  'fl_noships' => 'На орбите планеты нет кораблей',
  'fl_unselectall' => 'Обнулить',
  'fl_selectall' => 'Все корабли',
  'fl_orbiting' => 'На орбите',
  'fl_to_fly' => 'Отправить',
  'fl_no_flying_fleets' => 'Нет флотов в полете',
  'fl_floten1_ttl' => 'Выбор точки назначения',
  'fl_noenought' => 'Недостаточно кораблей!',
  'fl_speed' => 'Скорость',
  'fl_planet' => 'Планета',
  'fl_ruins' => 'Поле обломков',
  'fl_moon' => 'Луна',
  'fl_dist' => 'Расстояние',
  'fl_fltime' => 'Продолжительность (в одну сторону)',
  'fl_time_go' => 'Прибытие в точку назначение',
  'fl_time_back' => 'Возвращение в точку старта',
  'fl_deute_need' => 'Потребление топлива',
  'fl_speed_max' => 'Максимальная скорость',
  'fl_shortcut' => 'Заметки с координатами',
  'fl_shortlnk' => 'Редактировать закладки',
  'fl_shrtcup1' => '(П)',
  'fl_shrtcup2' => '(О)',
  'fl_shrtcup3' => '(Л)',
  'fl_planettype1' => 'Планета',
  'fl_planettype2' => 'Поле обломков',
  'fl_planettype3' => 'Луна',
  'fl_myplanets' => 'Планеты',
  'fl_nocolonies' => 'нет планет',
  'fl_noacss' => 'Нет приглашений в боевые союзы',
  'fl_grattack' => 'Боевые союзы',
  'fl_allressources' => 'Все ресурсы',
  'fl_space_left' => 'Место в трюме',
  'fl_attack_error' => array(
    ATTACK_ALLOWED => 'Флот успешно отправлен',
    ATTACK_NO_TARGET => 'Указанный пункт назначения не существует',
    ATTACK_OWN => 'Нельзя атаковать собственные планеты',
    ATTACK_WRONG_MISSION => 'Это задание не может быть выполнено в указанной точке назначения',
    ATTACK_NO_ALLY_DEPOSIT => 'На планете нет склада Альянса',
    ATTACK_NO_DEBRIS => 'Поле обломков не существует',
    ATTACK_VACATION => 'Нельзя атаковать игрока, находящегося в режие отпуска',
    ATTACK_SAME_IP => 'ЗАЩИТА ОТ МУЛЬТИАККАУНТОВ!<br>Взаимодействие с игроком с таким же IP невозможно',
    ATTACK_BUFFING => 'Прокачка - передача ресурсов от слабого игрока к сильному - запрещена правилами',
    ATTACK_ADMIN => 'Вы не можете атаковать Администратора',
    ATTACK_NOOB => 'Этот игрок слишком слабый для вас',
    ATTACK_OWN_VACATION => 'Вы же в отпуске',
    ATTACK_NO_SILO => 'Слишком низкий уровень ракетной шахты',
    ATTACK_NO_MISSILE => 'Нельзя начать ракетную атаку без ракет',
    ATTACK_NO_FLEET => 'Нельзя отправлять на задание пустой флот',
    ATTACK_NO_SLOTS => 'Некому командовать флотом',
    ATTACK_NO_SHIPS => 'Не хватает боевых единиц или заявленного количества ресурсов для перевозки',
    ATTACK_NO_RECYCLERS => 'Нельзя отправить на переработку флот без переработчиков',
    ATTACK_NO_SPIES => 'Нельзя отправить шпионить флот без шпионских зондов',
    ATTACK_NO_COLONIZER => 'Нельзя колнизировать планету без колонизатора',
    ATTACK_MISSILE_TOO_FAR => 'Ракеты нельзя запустить так далеко',
    ATTACK_WRONG_STRUCTURE => 'Нельзя атаковать ракетами что-то кроме защитных сооружений',
    ATTACK_NO_FUEL => 'Не хватает дейтерия для запуска флота',
    ATTACK_NO_RESOURCES => 'Нет указанного количества ресурсов для транспортировки',
    ATTACK_NO_ACS => 'Указанная группа САБ не существует',
    ATTACK_ACS_MISSTARGET => 'Не совпадает точка назначения и цель группы САБ',
    ATTACK_WRONG_SPEED => 'Неправильная скорость полета',
    ATTACK_ACS_TOO_LATE => 'Флот слишком медленный - он не успеет догнать группу САБ',
    ATTACK_BASHING => 'Защита от башинга. Уже произведено разрешенное количество атак в сутки на одну планету',
    ATTACK_BASHING_WAR_DELAY => 'Защита от башинга. Война этому Альянсу уже объявлена, но еще не началась. Посмотрите на страницу информации вашего Альянса, что бы увидеть дату начала войны',
    ATTACK_ACS_WRONG_TARGET => 'Точка назначения флота не совпадает с целью для САБа',
    ATTACK_SAME => 'Исходная планета совпадает с пунктом назначения флота',
    ATTACK_RESOURCE_FORBIDDEN => 'Нельзя отправить флот с ресурсами в эту миссию',
    ATTACK_TRANSPORT_EMPTY => 'Нельзя отправить флот без ресурсов в транспортную миссию',
    ATTACK_SPIES_LONLY => 'Нельзя отправить в эту миссию флот только из шпионских зондов',
    ATTACK_TOO_FAR => 'Ваш флот не может лететь так далеко',
    ATTACK_OVERLOADED => 'Ваши корабли перегружены. Уменьшите загрузку трюмов или добавьте транспортных кораблей',
    ATTACK_MISSION_ABSENT => 'Не существует такого типа миссии',
    ATTACK_WRONG_UNIT => 'Неправильный тип юнита',
    ATTACK_ZERO_SPEED => 'Во флоте находится нелетающая орбитальная структура',
    ATTACK_SHIP_COUNT_WRONG => 'Количество кораблей во флоте не может быть негативным',
    ATTACK_RESOURCE_COUNT_WRONG => 'Количество ресурсов во флоте не может быть негативным',
    ATTACK_MORATORIUM => 'На запуск флота в эту миссию наложен мораторий',
  ),

  'fl_fleet_err' => 'Ошибка!',
  'fl_unknow_target' => '<li>Указанный пункт назначения не существует!</li>',
  'fl_nodebris' => '<li>Поле астероидов не существует!</li>',
  'fl_nomoon' => '<li>Луна не существует!</li>',
  'fl_vacation_ttl' => 'Режим отпуска',
  'fl_vacation_pla' => 'Игрок находится в режие отпуска!',
  'fl_noob_title' => 'Защита новичков',
  'fl_noob_mess_n' => 'Игрок находится под защитой новичков!',
  'fl_bad_planet01' => '<li>На планете есть жизнь!</li>',
  'fl_colonized' => '<li>Планета уже колонизирована!</li>',
  'fl_dont_stay_here' => 'Вы не можете приземляться на вражеской планете!',
  'fl_no_allydeposit' => 'На планете нет склада Альянса!',
  'fl_no_self_attack' => '<li>Нельзя атаковать собственные планеты!</li>',
  'fl_no_self_spy' => '<li>Нельзя отправлять шпионов на собственные планеты!</li>',
  'fl_only_stay_at_home' => '<li>Нельзя передислоцировать флот на чужую планету!</li>',
  'fl_cheat_speed' => 'Попытка багоюзерства! Сообщение администрации отправлено!',
  'fl_cheat_origine' => 'Попытка багоюзерства! Сообщение администрации отправлено!',
  'fl_limit_planet' => '<li>Неправильная планета !</li>',
  'fl_limit_system' => '<li>Неправильная система !</li>',
  'fl_limit_galaxy' => '<li>Неправильная галактика !</li>',
  'fl_ownpl_err' => '<li>Нельзя нападать на свою планету!</li>',
  'fl_no_planet_type' => '<li>Неправильная точка назначение!</li>',
  'fl_fleet_err_pl' => '<li>Ошибка планеты назначения!</li>',
  'fl_bad_mission' => '<li>Задание не указано или указано невозможное задание!</li>',
  'fl_no_fleetarray' => '<li>Что-то с флотом не так!</li>',
  'fl_noenoughtgoods' => '<li>Попытка отправить пустой флот с заданием &quot;Транспорт&quot;!</li>',
  'fl_expe_notech' => '<li>Перед отправкой экспедиции нужно исследовать Астрокартографию!</li>',
  'fl_expe_max' => '<li>Вы не можете отправить ещё одну экспедицию. Развивайте Астрокартографию.</li>',
  'fl_no_deuterium' => 'Не хватает дейтерия что бы загрузить трюмы и обеспечить полет. Нехватка: ',
  'fl_no_resources' => 'Не хватает ресурсов, что бы загрузить трюмы флота.',
  'fl_nostoragespa' => 'Не хватает места в трюме для перевозки ресурсов! Нехватка: ',
  'fl_fleet_send' => 'Флот отправлен',
  'fl_expe_warning' => 'Внимание, вы можете потерять корабли во время экспедиции!',
  'fl_expe_staytime' => 'время удержания',
  'fl_expe_hours' => 'часов',
  'fl_adm_attak' => 'Вы не можете атаковать Администратора',
  'fl_warning' => 'Предупреждение',
  'fl_page0_hint' => '<ul><li>Для создания, редактирования и удаления закладкок используйте пункт &quot;Закладки&quot; в левом меню<li>Что бы присоединится к боевому союзу кликните на названии любого доступного вам союза</ul>',
  'fl_page1_hint' => '<ul><li>Продолжительность полета включает время на взлет/посадку флота - обязательную компоненту любого рейса, как далеко или близко он бы не совершался<li>Для создания, редактирования и удаления закладкок используйте пункт &quot;Закладки&quot; в левом меню<li>Что бы присоединится к боевому союзу кликните на названии любого доступного вам союза</ul>',
  'fl_page5_hint' => '<ul><li>Отметьте галочками в строчках колоний виды ресурсов, которые хотите свезти на текущую планету  <li>Галочка в заголовке окна позволяет поставить или снять отметки для указанного типа ресурсов сразу на всех колониях  <li>Галочки в столбце ВСЕГО позволяют отметить или снять отметки для всех ресурсов на указанной колонии  <li>Галочки в столбце ВСЕГО предназначены исключительно для облегчения работы с интерфейсом и <span class="negative">НЕ ВЛИЯЮТ</span> на набор свозимых ресурсов  <li>В перевозке ресурсов участвуют только транспортные корабли: Малый транспорт, Большой транспорт, Супертранспорт и Гипертранспорт<li>Корабли загружаются в порядке убывания емкости трюма<li>В расчете строки ИТОГО учитывается ёмкость трюмов флота</ul>',
  'fl_err_no_ships' => 'Во флоте нет ни одного корабля. Вернитесь на предыдущую страницу и выберите корабли для отправки флота',
  'fl_shrtcup' => array(
    PT_PLANET => '(П)',
    PT_DEBRIS => '(О)',
    PT_MOON => '(Л)',
  ),

  'fl_planettype' => array(
    PT_PLANET => 'Планета',
    PT_DEBRIS => 'Поле обломков',
    PT_MOON => 'Луна',
  ),

  'fl_aks_invite_message_header' => 'Приглашение к САБ',
  'fl_aks_invite_message' => '<font color="red">Игрок %s пригласил Вас присоединяться к САБ. Вы можете присоединиться к САБ на странице &quot;Флот&quot;.</font>',
  'fl_aks_player_invited' => '<font color="lime">Игрок %s был приглашен для совместного нападения.</font>',
  'fl_aks_player_invited_already' => '<font color="lime">Игрок %s уже приглашен. Повторное приглашение отослано.</font>',
  'fl_aks_player_error' => '<font color="red">Ошибка. Игрок %s не найден.</font>',
  'fl_aks_already_in_aks' => 'Флот уже в боевой группе!',
  'fl_aks_adding_error' => 'Ошибка добавления участника к флоту:<br>%s',
  'fl_aks_hack_wrong_fleet' => 'Попытка взлома! Манипулирование чужим флотом! Сообщение отправлено Администратору!',
  'fl_aks_too_slow' => 'Флот слишком медленный и не может присоединиться к боевому союзу',
  'fl_fleet_not_exists' => 'Указанный флот не найден',
  'fl_multi_ip_protection' => 'ЗАЩИТА ОТ МУЛЬИАККАУНТОВ!<br>Невозможно отправить ресурсы игроку с таким же IP!',
  'fl_load_cargo' => 'В трюме',
  'fl_rest_on_planet' => 'Остаток',
  'fl_none_resources' => 'Сбросить',
  'fl_planet_resources' => 'Ресурсы на планете',
  'fl_fleet_data' => 'Текущие параметры флота',
  'flt_gather_report' => 'Отчет о выполнении',
  'flt_report' => 'Отчет',
  'flt_no_transports' => 'нет транспорта',
  'flt_no_fuel' => 'нет топлива',
  'fl_id' => '№',
  'fl_ressources' => 'Сырьё',

  'fl_fuel_on_planet' => 'Топливо на складе',

  'flt_aks_players_in_aks' => 'Игроки в САБ',
  'flt_aks_player_invite' => 'Пригласить игрока в САБ',
  'flt_aks_player_invite_do' => 'Пригласить',
  'flt_aks_player_same' => 'Нельзя присоединить к САБу пользователя, на которого совершается нападение!',
  'flt_aks_error_too_much_players' => 'Нельзя пригласить в САБ больше 5 игроков',

  'flt_return_all' => 'Вернуть отмеченные',
  'flt_return_fleet' => 'Вернуть флот',

  'flt_acs_prefix' => 'САБ ',
));
